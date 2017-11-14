var curIndex=0;
var timeInterval=3000;
var arr=new Array();
arr[0]="style/images/pic/slider1.png";
arr[1]="style/images/pic/slider2.png";
arr[2]="style/images/pic/slider3.png";
var obj=document.getElementById("slider_src");
function changeImg()
{

    if (curIndex==arr.length-1)
    {
        curIndex=0;
    }
    else
    {
        curIndex+=1;
    }
    $('#slider_src').animate({opacity:0},500,function () {
        obj.src=arr[curIndex];
        $('#slider_src').animate({opacity:1},500);
    });
}
var ci = setInterval(changeImg,timeInterval);
obj.onmouseover=function(){clearInterval(ci);};
obj.onmouseout=function(){ci = setInterval(changeImg,timeInterval);};