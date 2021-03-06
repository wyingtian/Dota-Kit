$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$(function () {

    var pastDraggable = "";
    $(".draggable_hero").draggable({
        start: function () {
            Positioning_hero.initialize($(this));
        },
        revert:  function(dropped) {
            var wasJustDropped = dropped && dropped[0].id == "droppable_hero";
            return !wasJustDropped;
        },

    });

    $("#droppable_hero").droppable({
        //Event to accept a draggable when dropped on the droppable
        accept: '.draggable_hero',
        drop: function (event, ui) {
            //Get the current draggable object
            var currentDraggable = $(ui.draggable).attr('id');
                $('#build_hero').val(currentDraggable);
                $(this).addClass("ui-state-highlight").find("p").html("Hero Chosen");

                //If there is an object prior to the current one
                if (pastDraggable != "") {
                    //Place past object into its original coordinate
                    $("#" + pastDraggable).animate($("#" + pastDraggable).data().originalLocation, "slow");
                }
                //Store the current draggable object
                pastDraggable = currentDraggable;
        },
        //Event to accept a draggable when dragged outside the droppable
        out: function (event, ui) {
            var currentDraggable = $(ui.draggable).attr('id');
            $(ui.draggable).animate($(ui.draggable).data().originalLocation, "slow");
        },

    });
});

var Positioning_hero = (function () {
    return {
        //Initializes the starting coordinates of the object
        initialize: function (object) {
            object.data("originalLocation", $(this).originalPosition = { top: 0, left: 0 });
        },
        //Resets the object to its starting coordinates
        reset: function (object) {
            object.data("originalLocation").originalPosition = { top: 0, left: 0 };
        },
    };
})();

$(function () {
    var pastDraggableArray = [];
    var pastDraggable="";
    $(".draggable_item").draggable({
        revert:  function(dropped) {
            var wasJustDropped = dropped && dropped[0].id == "droppable_item";
            return !wasJustDropped;
        },
        helper: "clone"
    });

    $("#droppable_item").droppable({
        accept:'.draggable_item',
        //Event to accept a draggable when dropped on the droppable
        drop: function (event, ui) {
            $(ui.draggable).clone().appendTo($(this));
            //Get the current draggable object
            var currentDraggable = $(ui.draggable).attr('id');
                pastDraggableArray.push(currentDraggable);
                //Store the current draggable object
                pastDraggable = currentDraggable;
            var moreItemNum = 6 - pastDraggableArray.length;
                $(this).addClass("ui-state-highlight").find("p").html("You need to put " + moreItemNum + " more items");
                $('#build_items').val(pastDraggableArray);

        },
    });
});



$(function () {
    $(".droppable_edit_item").droppable({
        accept:'.draggable_item',
        //Event to accept a draggable when dropped on the droppable
        drop: function (event, ui) {
            $(this).find('img').remove();
            $(ui.draggable).clone().appendTo($(this));
            var item_id =$(this).find('img').attr("id")
            $(this).find("input").val(item_id);
            //$(this).addClass("ui-state-highlight");
        },
    });
});