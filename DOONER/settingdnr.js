const notificationIcon = document.querySelector('.notification-icon');
const notificationBadge = document.querySelector('.badge');

// إضافة استماع حدث النقر لعرض الإشعارات
notificationIcon.addEventListener('click', function() {
  // اعرض قائمة الإشعارات هنا
  // يمكن استخدام AJAX لجلب البيانات من الخادم وعرضها
  notificationBadge.style.display = 'none'; // إخفاء الشارة
});
