(function(){
    /*
     *
     *  This manages the canvas and stars portion (my solution)
     *
     */
    
    let width = document.getElementById('stars').clientWidth;
    let height = document.getElementById('stars').clientHeight;
    
    const canvas = document.getElementById('stars');
    const ctx = canvas.getContext("2d");

    // Stars to be created.
    let makeSmallStars = 200;
    let makeMedStars = 100;
    let makeLargeStars = 50;

    // Made star objects.
    let smallStars, medStars, largeStars = [];

    let starSets = [];
    
    // Creates star objects.
    starNursery = (makeSmallStars, makeMedStars, makeLargeStars) => {
        
        let smallStars, medStars, largeStars = [];
        
        smallStars = getStars(makeSmallStars, 'small');

        medStars = getStars(makeMedStars, 'med');

        largeStars = getStars(makeLargeStars, 'large');

        
        return [smallStars, medStars, largeStars];
        
    }

    getStars = (numOfStars, type) => {
        let starSet = [];
        let star = {};

        let x, y, w, h;
        
        
        switch (type) {
            case 'small':
                w = 1;
                h = 1;
                break;
            
            case 'med':
                w = 1.7;
                h = 1.7;
                break;
            
            case 'large':
                w = 2.7;
                h = 2.7;
                break;
            
            default:
                w = 2;
                h = 2;
                break;
        }

        for(i = 0; i < numOfStars; i++){
            x = Math.floor(Math.random() * width + 1);
            y = Math.floor(Math.random() * height + 1);
            

            star = {'x': x, 'y': y, 'w': w, 'h': h};
            starSet.push(star);
        }

        
        return starSet;        

    }

    starSets = starNursery(makeSmallStars, makeMedStars, makeLargeStars);

    smallStars = starSets[0];
    medStars = starSets[1];
    largeStars = starSets[2];

    // Responsive width for the canvas.
    canvas.width = width;

    function draw(){
        
        let x, y, w, h;
        // Clears full canvas
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for ( let star of smallStars){

            x = star['x'];
            y = star['y'];
            w = star['w'];
            h = star['h'];
            

            if(y > -10){
                // Erases and removes the star. Advances it for next cycle.
                ctx.clearRect(x, y, w, h);
                star['y'] -= 0.5;
                y = star['y'];
                
            } else {
                // Loops star to the bottom.
                star['y'] = height;
                y = height;

            }

            // Draws the star.
            ctx.fillStyle = 'white';
            ctx.fillRect(x, y, w, h);

        }

        for ( let star of medStars){

            x = star['x'];
            y = star['y'];
            w = star['w'];
            h = star['h'];


            if(y > -10){
                // Erases and removes the star. Advances it for next cycle.
                ctx.clearRect(x, y, w, h);
                star['y'] -= 0.7;
                y = star['y'];
                
            } else {

                // Loops star to the bottom.
                star['y'] = height;
                y = height;
                
            }

            // Draws the star.
            ctx.fillStyle = 'white';
            ctx.fillRect(x, y, w, h);

        }

        for ( let star of largeStars){

            x = star['x'];
            y = star['y'];
            w = star['w'];
            h = star['h'];


            if(y > -10){
                // Erases and removes the star. Advances it for next cycle.
                ctx.clearRect(x, y, w, h);
                star['y'] -= 1;
                y = star['y'];
                
            } else {
                // Loops star to the bottom.
                star['y'] = height;
                y = height;

            }

            // Draws the star.
            ctx.fillStyle = 'white';
            ctx.fillRect(x, y, w, h);

        }

        window.requestAnimationFrame(draw);
    }
    
    window.requestAnimationFrame(draw);
})();


(function($){
    
    // Manages editable portions.

    $('.editable').click(

    function(event){
        // Grabs the parent.
        let theParent =event.currentTarget.parentNode;
        
        let toEdit = $(theParent).attr('id');
        console.log(toEdit);
        let toLoadIn = document.getElementById(toEdit);
      
        switch(toEdit){

            case 'face':
                $(toLoadIn).load(edit_paths.face);
                break;
            
            
            case 'edit-project-one':
                $(toLoadIn).load(edit_paths.project_one);
                break;
            

            case 'edit-project-two':
                $(toLoadIn).load(edit_paths.project_two);
                break;
                
            
            case 'edit-project-three':
                $(toLoadIn).load(edit_paths.project_three);
                break;


            case 'hide-codepen-block':
                $(toLoadIn).load(edit_paths.fcc);
                break;


            default:
                break;

        }

    });

    
    

})(jQuery);