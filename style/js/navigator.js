var menu; var menu_list; var menu_length;
var content; var content_list; var content_length;
var index; var index_before; var index_after;

function init(menu_class_name,menu_class_index,content_class_name,content_class_index)
{
    menu = document.getElementsByClassName(menu_class_name)[menu_class_index];
    menu_list = new Array();
    menu_length = menu.childElementCount;
    menu_list[0] = menu.firstElementChild;
    for(var i = 1; i < menu_length; i++)
        menu_list[i] = menu_list[i-1].nextElementSibling;

    content = document.getElementsByClassName(content_class_name)[content_class_index];
    content_list = new Array();
    content_length = content.childElementCount;
    content_list[0] = content.firstElementChild;
    for(var i = 1; i < content_length; i++)
        content_list[i] = content_list[i-1].nextElementSibling;

    index = 0;
    index_before = 0;
    index_after = 0;
}

function layer_change_animate(before_id,after_id) {
    if(before_id!=after_id)
    {
        $('#'+before_id).animate({opacity:0},500,function () {
            $('#'+before_id).attr('hidden','hidden');
            $('#'+after_id).animate({opacity:0},1);
            $('#'+after_id).removeAttr('hidden');
            $('#'+after_id).animate({opacity:1},500);
            $('#'+before_id).animate({opacity:1},1);
        });
    }
}

function layer_change(before,after) {
    if (before!=after)
    {
        before.setAttribute('hidden','');
        after.removeAttribute('hidden');
    }
}

$('#tab-menu li').click(function ()
{
    init('ddsmoothmenu',0,'tab-content',0);
    while(index < menu_length)
    {
        if (!content_list[index].hasAttribute('hidden'))
            if (menu_list[index].isSameNode(this))
                break;
            else
                index_before = index;
        else if (menu_list[index].isSameNode(this))
            index_after = index;
        index++;
    }
    layer_change_animate(content_list[index_before].getAttribute('id'),content_list[index_after].getAttribute('id'));
});


//side character picture change
$('#tab-menu li').click(function () {
    var count = 20;
    var character1,character2;
    do {
        character1 = Math.floor(Math.random()*count);
        character2 = Math.floor(Math.random()*count)
    }while (character1==character2);
    $('#imgLeft').animate({marginLeft:'-350px'},700,function () {
        $('#imgLeft').css('background-position-y',400*character1+'px');
    });
    $('#imgLeft').animate({marginLeft:'20px'},700);

    $('#imgRight').animate({marginRight:'-350px'},700,function () {
        $('#imgRight').css('background-position-y',400*character2+'px');
    });
    $('#imgRight').animate({marginRight:'20px'},700);
});

$('#download li').click(
    function ()
    {
        init('inner_tab',0,'panes',0);
        while(index < menu_length)
        {
            if (!content_list[index].hasAttribute('hidden'))
                if (menu_list[index].isSameNode(this))
                    break;
                else
                    index_before = index;
            else if (menu_list[index].isSameNode(this))
                index_after = index;
            index++;
        }
        layer_change(content_list[index_before],content_list[index_after]);
    });

$('#strategy li').click(
    function ()
    {
        init('inner_tab',1,'panes',1);
        while(index < menu_length)
        {
            if (!content_list[index].hasAttribute('hidden'))
                if (menu_list[index].isSameNode(this))
                    break;
                else
                    index_before = index;
            else if (menu_list[index].isSameNode(this))
                index_after = index;
            index++;
        }
        layer_change(content_list[index_before],content_list[index_after]);
    });