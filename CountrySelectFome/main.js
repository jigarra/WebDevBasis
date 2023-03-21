var subjectObject = {
    "India": {
        "Delhi": ["new Delhi", "North Delhi"],
        "Kerala": ["Thiruvananthapuram", "Palakkad"],
        "Goa": ["North Goa", "South Goa"],
    },
    "Australia": {
        "South Australia": ["Dunstan", "Mitchell"],
        "Victoria": ["Altona", "Euroa"]
    }, "Canada": {
        "Alberta": ["Acadia", "Bighorn"],
        "Columbia": ["Washington", ""]
    },
}
window.onload = function () {
    var subjectSel = document.getElementById("subject");
    var topicSel = document.getElementById("topic");
    var chapterSel = document.getElementById("chapter");

    topicSel.hidden = true;
    chapterSel.hidden = true;

    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);

    }

    subjectSel.onchange = function () {
        
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        topicSel.hidden = true;
        chapterSel.hidden = true;
        //display correct values
        
        for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
            topicSel.hidden = false;
        }
        
    }

    topicSel.onchange = function () {

        chapterSel.length = 1;
        chapterSel.hidden = true;
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
            
        }

        chapterSel.hidden = false;
    }

}