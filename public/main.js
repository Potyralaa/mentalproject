"use strict";

Array.prototype.includes || (Array.prototype.includes = function (r) {
  "use strict";
  if (null == this) throw new TypeError("Array.prototype.includes called on null or undefined");var e = Object(this),
      t = parseInt(e.length, 10) || 0;if (0 === t) return !1;var n,
      o = parseInt(arguments[1], 10) || 0;o >= 0 ? n = o : (n = t + o, 0 > n && (n = 0));for (var i; t > n;) {
    if (i = e[n], r === i || r !== r && i !== i) return !0;n++;
  }return !1;
});
function addEvents(e) {
  $(window).on("hashchange", function () {
    changeStatusByHash(e.footer, ["newsletter"]);
  });
}function setFooterDate(e) {
  var a = new Date().getFullYear();e.footer.append(a);
}function changeStatusByHash(e, a) {
  var t = location.hash.substr(1, location.hash.length - 1);a.includes(t) ? e.addClass("active") : e.removeClass("active");
}$(document).ready(function () {
  var e = { nav: $("nav.navbar"), fullpage: $("#fullpage"), footer: $("footer") };changeStatusByHash(e.footer, ["newsletter"]), setFooterDate(e), addEvents(e), e.fullpage.fullpage();
});
//# sourceMappingURL=maps/main-ae0b526cb3.js.map