// $("#close_burger_menu").click(function () {
//   $(".header_mobile_podlojka").slideUp("fast"); // Используйте fadeIn() или css("display", "block") по желанию
// });
// $("#close_burger_menu").click(function () {
//   $("#myBlock").slideDown("fast"); // Используйте fadeIn() или css("display", "block") по желанию
// });
$("#close_burger_menu").click(function () {
  $(".header_mobile_podlojka").toggleClass("open"); // Сначала показываем или скрываем блок
});
$("#burger_btn").click(function () {
  $(".header_mobile_podlojka").toggleClass("open"); // Сначала показываем или скрываем блок
});
