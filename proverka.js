$('body').on('input', '.input-en', function(){
    this.value = this.value.replace(/[^a-z\s]/gi, '');
});