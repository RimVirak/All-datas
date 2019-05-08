 module.exports = function (grunt){
       grunt.registerTask('speak',function(){
           console.log('I am a speaking.');
       });

    grunt.registerTask('virak',function(){
        console.log('I am virak.');
    });

    grunt.registerTask('both',['speak','virak']);
    
}


