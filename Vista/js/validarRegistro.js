$('#pass_1').keyup(function(){
    var _this = $('#pass_1');
    var pass_1 = $('#pass_1').val();
            _this.attr('style', 'background:white');
    if(pass_1.charAt(0) == ' '){
        _this.attr('style', 'background:#FF4A4A');
    }

    if(_this.val() == ''){
        _this.attr('style', 'background:#FF4A4A');
    }
});

$('#pass_2').keyup(function(){
    var pass_1 = $('#pass_1').val();
    var pass_2 = $('rpass_2').val();
    var _this = $('#pass_2');
            _this.attr('style', 'background:white');
    if(pass_1 != pass_2 && pass_2 != ''){
        _this.attr('style', 'background:#FF4A4A');
    }
});