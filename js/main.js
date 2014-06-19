//*** Off Canvas Toggle ***//
//*** http://stackoverflow.com/questions/1566595/can-i-use-multiple-versions-of-jquery-on-the-same-page ***//
//We have to do a noConflict to make it work with Widgetkit
var jQuery10 = $.noConflict(true);

jQuery10(document).ready(function() {
		jQuery10('[data-toggle=offcanvas]').click(function() {
			jQuery10('.row-offcanvas').toggleClass('active');
			jQuery10('.showhide').toggle();
		});
	});

//** Dynamic Drive Equal Columns Height script v1.01 (Nov 2nd, 06)
//** http://www.dynamicdrive.com/style/blog/entry/css-equal-columns-height-script/
var ddequalcolumns = new Object()
//Input IDs (id attr) of columns to equalize. Script will check if each corresponding column actually exists:
ddequalcolumns.columnswatch = ["printdesign", "printing", "webdesign", "webhosting" ] //"user3", "user7", "user8", "user9", "user4", "user5", "user6", 

ddequalcolumns.setHeights = function (reset) {
        var tallest = 0
        var resetit = (typeof reset == "string") ? true : false
        for (var i = 0; i < this.columnswatch.length; i++) {
            if (document.getElementById(this.columnswatch[i]) != null) {
                if (resetit) document.getElementById(this.columnswatch[i]).style.height = "auto"
                if (document.getElementById(this.columnswatch[i]).offsetHeight > tallest) tallest = document.getElementById(this.columnswatch[i]).offsetHeight
            }
        }
        if (tallest > 0) {
            for (var i = 0; i < this.columnswatch.length; i++) {
                if (document.getElementById(this.columnswatch[i]) != null) document.getElementById(this.columnswatch[i]).style.height = tallest + "px"
            }
        }
    }

ddequalcolumns.resetHeights = function () {
    this.setHeights("reset")
}

ddequalcolumns.dotask = function (target, functionref, tasktype) { //assign a function to execute to an event handler (ie: onunload)
    var tasktype = (window.addEventListener) ? tasktype : "on" + tasktype
    if (target.addEventListener) target.addEventListener(tasktype, functionref, false)
    else if (target.attachEvent) target.attachEvent(tasktype, functionref)
}

ddequalcolumns.dotask(window, function () {
    ddequalcolumns.setHeights()
}, "load")
ddequalcolumns.dotask(window, function () {
    if (typeof ddequalcolumns.timer != "undefined") clearTimeout(ddequalcolumns.timer);
    ddequalcolumns.timer = setTimeout("ddequalcolumns.resetHeights()", 200)
}, "resize")


