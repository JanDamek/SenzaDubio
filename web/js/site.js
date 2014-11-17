var scrolling = null;
var cnt = 0;

function scrollup() {
    var div=document.getElementById('site_cont');
    div.scrollTop = div.scrollTop - 1
    cnt++;
    if (cnt>115) stop_scroll()
    else
        scrolling = setTimeout("scrollup()", 7);

}

function scrolldown() {
    var div=document.getElementById('site_cont');
    div.scrollTop = div.scrollTop + 1;
    cnt++;
    if (cnt>115) stop_scroll()
    else
        scrolling = setTimeout("scrolldown()", 7);
}

function stop_scroll() {
    clearTimeout(scrolling);
    cnt = 0;
}

function clickToNewWindow() {
    window.open(this.href,'_blank');
    return false;
}

function moveObject(event)
{
    var delta = 0;
 
    if (!event) event = window.event;
 
    // normalize the delta
    if (event.wheelDelta) {
 
        // IE and Opera
        delta = event.wheelDelta / 60;
 
    } else if (event.detail) {
 
        // W3C
        delta = -event.detail / 2;
    }
 
    var currPos=document.getElementById('site_cont').offsetTop;
 
    //calculating the next position of the object
    currPos=parseInt(currPos)-(delta);
 
    //moving the position of the object
    document.getElementById('site_cont').scrollTop = document.getElementById('site_cont').scrollTop - (event.wheelDelta/4);
//    document.getElementById('info').innerHTML = event.wheelDelta + ":" + event.detail + ":" + document.getElementById('site_cont').scrollTop;
}

function get_fb_comments(el){
    var fb = document.createElement('fb:comments');
    fb.setAttribute('numposts','20');
    fb.setAttribute('width','600');
    document.getElementById(el).appendChild(fb);
}

var menu=function(){
    var t=15,z=50,s=6,a;
    function dd(n){
        this.n=n;
        this.h=[];
        this.c=[]
    }
    dd.prototype.init=function(p,c){
        a=c;
        var w=document.getElementById(p), s=w.getElementsByTagName('ul'), l=s.length, i=0;
        for(i;i<l;i++){
            var h=s[i].parentNode;
            this.h[i]=h;
            this.c[i]=s[i];
            h.onmouseover=new Function(this.n+'.st('+i+',true)');
            h.onmouseout=new Function(this.n+'.st('+i+')');
        }
    }
    dd.prototype.st=function(x,f){
        var c=this.c[x], h=this.h[x], p=h.getElementsByTagName('a')[0];
        clearInterval(c.t);
        c.style.overflow='hidden';
        if(f){
            p.className+=' '+a;
            if(!c.mh){
                c.style.display='block';
                c.style.height='';
                c.mh=c.offsetHeight;
                c.style.height=0
            }
            if(c.mh==c.offsetHeight){
                c.style.overflow='visible'
            }
            else{
                c.style.zIndex=z;
                z++;
                c.t=setInterval(function(){
                    sl(c,1)
                },t)
            }
        }else{
            p.className=p.className.replace(a,'');
            c.t=setInterval(function(){
                sl(c,-1)
            },t)
        }
    }
    function sl(c,f){
        var h=c.offsetHeight;
        if((h<=0&&f!=1)||(h>=c.mh&&f==1)){
            if(f==1){
                c.style.filter='';
                c.style.opacity=1;
                c.style.overflow='visible'
            }
            clearInterval(c.t);
            return
        }
        var d=(f==1)?Math.ceil((c.mh-h)/s):Math.ceil(h/s), o=h/c.mh;
        c.style.opacity=o;
        c.style.filter='alpha(opacity='+(o*100)+')';
        c.style.height=h+(d*f)+'px'
    }
    return{
        dd:dd
    }
}();
