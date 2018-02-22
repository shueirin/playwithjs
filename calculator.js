var calc = (function(){
    var c = {};
    
    c.add = function(a,b){
        return a + b;
    }
    c.substract = function(a,b){
        return a - b;
    }
    c.times = function(a,b){
        return a * b;
    }
    c.divide = function(a,b){
        if(b !== 0){
            return a / b    
        } else {
            return "You can't divide by Zero!"
        }   
    }
    return c;    
})();

$(function(){
    $('#add').click(function(){
        var value1 = parseFloat($('#v1').val());
        var value2 = parseFloat($('#v2').val());
        console.log(calc.add(value1, value2));
        $('.resultbox').text(calc.add(value1, value2));
    });
    $('#substract').click(function(){
        var value1 = parseFloat($('#v1').val());
        var value2 = parseFloat($('#v2').val());
        console.log(calc.add(value1, value2));
        $('.resultbox').text(calc.substract(value1, value2));
    });
    $('#times').click(function(){
        var value1 = parseFloat($('#v1').val());
        var value2 = parseFloat($('#v2').val());
        console.log(calc.add(value1, value2));
        $('.resultbox').text(calc.times(value1, value2));
    });
    $('#divide').click(function(){
        var value1 = parseFloat($('#v1').val());
        var value2 = parseFloat($('#v2').val());
        console.log(calc.add(value1, value2));
        $('.resultbox').text(calc.divide(value1, value2));
    });
});
