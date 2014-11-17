<?php

/**
 * Stranky
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    senzadubbio
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Stranky extends BaseStranky {

    public function save(Doctrine_Connection $conn = null) {
        $conn = $conn ? $conn : $this->getTable()->getConnection();
        $conn->beginTransaction();
        try {
            $ret = parent::save($conn);

            $this->updateLuceneIndex();

            $conn->commit();

            return $ret;
        }
        catch (Exception $e) {
            $conn->rollBack();
            throw $e;
        }
    }

    public function delete(Doctrine_Connection $conn = null) {
        $index = ZajezdyTable::getLuceneIndex();

        foreach ($index->find('pk:' . $this->getId()) as $hit) {
            $index->delete($hit->id);
        }

        return parent::delete($conn);
    }

    public function updateLuceneIndex() {
        $index = StrankyTable::getLuceneIndex();

        // remove existing entries
        foreach ($index->find('pk:' . $this->getId()) as $hit) {
            $index->delete($hit->id);
        }

        // preskocime nepublikovane zajezdy
        if (!$this->getPublikovat()) {
            return;
        }

        $doc = new Zend_Search_Lucene_Document();

        // store item primary key to identify it in the search results
        $doc->addField(Zend_Search_Lucene_Field::Keyword('pk', $this->getId()));

        // index job fields
        $doc->addField(Zend_Search_Lucene_Field::UnStored('perex', $this->getPerex(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('popis', $this->getPopis(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('name', $this->getName(), 'utf-8'));
        $doc->addField(Zend_Search_Lucene_Field::UnStored('title', $this->getTitle(), 'utf-8'));

        // add item to the index
        $index->addDocument($doc);
        $index->commit();
    }

    public static function luceneReindex() {
        $items = Doctrine_Query::create()
                ->from('Stranky a')
                ->Where('a.publikovat = 1')
                ->execute();

        ob_start();

        $index = StrankyTable::getLuceneIndex();
        // remove existing entries
        foreach ($items as $item) {
            ob_flush();
            flush();
            foreach ($index->find('pk:' . $item->getId()) as $hit) {
                $index->delete($hit->id);
            }

            $doc = new Zend_Search_Lucene_Document();

            // store item primary key to identify it in the search results
            $doc->addField(Zend_Search_Lucene_Field::Keyword('pk', $item->getId()));

            // index job fields
            $doc->addField(Zend_Search_Lucene_Field::UnStored('perex', $item->getPerex(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('popis', $item->getPopis(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('name', $item->getName(), 'utf-8'));
            $doc->addField(Zend_Search_Lucene_Field::UnStored('title', $item->getTitle(), 'utf-8'));

            // add item to the index
            $index->addDocument($doc);
            $index->commit();
        }
    }

}