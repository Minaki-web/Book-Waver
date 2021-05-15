// ここからパスワードの表示・非表示
$(function () {
  $('.toggle-password').on('click', function () {
    // iconの切り替え
    $(this).toggleClass('fa-eye-slash');

    // 入力フォームの取得
    let input = $(this).parent().prev('input');
    // type切替
    if (input.attr('type') == 'password') {
      input.attr('type', 'text');
    } else {
      input.attr('type', 'password');
    }
  });

  var nowchecked = $('input[name = Q3]:checked').val();
  $('input[name = Q3]').click(function () {
    if ($(this).val() == nowchecked) {
      $(this).prop('checked', false);
      nowchecked = false;
    } else {
      nowchecked = $(this).val();
    }
  });
});
