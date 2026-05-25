(function () {
  'use strict';
  var KEY = 'sw-cookie-consent';

  function init() {
    try { if (localStorage.getItem(KEY)) return; } catch (e) {}
    var notice = document.querySelector('.sw-cookie-notice');
    if (!notice) return;
    notice.style.display = 'block';

    function dismiss(choice) {
      try { localStorage.setItem(KEY, choice); } catch (e) {}
      notice.style.display = 'none';
    }

    var accept = notice.querySelector('.sw-cookie-accept');
    var decline = notice.querySelector('.sw-cookie-decline');
    if (accept) accept.addEventListener('click', function () { dismiss('accepted'); });
    if (decline) decline.addEventListener('click', function () { dismiss('declined'); });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
