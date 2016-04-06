$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();

  //  $("img").attr("id",'draggable');
});

$(function() {
    $( ".draggable_hero" ).draggable({
        revert:  function(dropped) {
            var $draggable = $(this),
                hasBeenDroppedBefore = $draggable.data('hasBeenDropped'),
                wasJustDropped = dropped && dropped[0].id == "droppable_hero";
            if(wasJustDropped) {
                // don't revert, it's in the droppable
                return false;
            } else {
                if (hasBeenDroppedBefore) {
                    // don't rely on the built in revert, do it yourself
                    $draggable.animate({ top: 0, left: 0 }, 'slow');
                    return false;
                } else {
                    // just let the build in work, although really, you could animate to 0,0 here as well
                    return true;
                }
            }
        }
    });

    $( ".draggable_item" ).draggable({
        revert:  function(dropped) {
            var $draggable = $(this),
                hasBeenDroppedBefore = $draggable.data('hasBeenDropped'),
                wasJustDropped = dropped && dropped[0].id == "droppable_item";
            if(wasJustDropped) {
                // don't revert, it's in the droppable
                return false;
            } else {
                if (hasBeenDroppedBefore) {
                    // don't rely on the built in revert, do it yourself
                    $draggable.animate({ top: 0, left: 0 }, 'slow');
                    return false;
                } else {
                    // just let the build in work, although really, you could animate to 0,0 here as well
                    return true;
                }
            }
        }
    });
   $(".draggable_item").draggable({helper : 'clone' });
});


$(function () {

    var pastDraggable = "";
    $(".draggable_hero").draggable({
        start: function () {
            Positioning.initialize($(this));
        },
    });

    $("#droppable_hero").droppable({
        //Event to accept a draggable when dropped on the droppable
        drop: function (event, ui) {

            //Get the current draggable object
            var currentDraggable = $(ui.draggable).attr('id');

            $(this).addClass("ui-state-highlight").find("p").html(currentDraggable);
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
        }
    });
});
var Positioning = (function () {
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
        start: function () {
            Positioning.initialize($(this));
        },
    });

    $("#droppable_item").droppable({
        //Event to accept a draggable when dropped on the droppable
        drop: function (event, ui) {
            //Get the current draggable object
            var currentDraggable = $(ui.draggable).attr('id');
            //If there is an object prior to the current one
            if (pastDraggableArray.length > 5) {
                //Place past object into its original coordinate
                $("#" + pastDraggable).animate($("#" + pastDraggable).data().originalLocation, "slow");
            }else{
                $(this).append(ui.draggable);
                pastDraggableArray.push(currentDraggable);
            }
            $(this).addClass("ui-state-highlight").find("p").html(pastDraggableArray.length);

            //Store the current draggable object
            pastDraggable = currentDraggable;
        },
        //Event to accept a draggable when dragged outside the droppable
        out: function (event, ui) {
            var currentDraggable = $(ui.draggable).attr('id');
            $(ui.draggable).animate($(ui.draggable).data().originalLocation, "slow");
        }
    });
});
var Positioning = (function () {
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



