window.onresize = function () {
    console.log(document.body.clientWidth);

    if (document.body.clientWidth < 975) {
        var leftTimelineBlocks = document.querySelectorAll('.timeline .block.left');
        for (var i = 0; i < leftTimelineBlocks.length; i++) {
            leftTimelineBlocks.item(i).classList.remove('left');
            leftTimelineBlocks.item(i).classList.add('right');
        }
    }
};