$(document).ready(function() {
  $('#telefone').mask('(00) 90000-0000', {
    translation: {
      '9': {
        pattern: /[9]/,
        optional: true
      }
    }
  });
  $('#email').mask("A", {
    translation: {
      "A": {
        pattern: /[\w@\-.+]/,
        recursive: true
      }
    }
  });
});
