const options = {
  format: 'yyyy-mm-dd',
};

  document.addEventListener('DOMContentLoaded', function(){
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
  });
