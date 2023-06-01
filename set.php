// كود PHP لجلب عدد الإشعارات الجديدة من قاعدة البيانات أو أي مصدر آخر

 // العدد الذي تم جلبه من قاعدة البيانات
$notificationCount = 3;
// استخدام $notificationCount لإنشاء عنصر الإشعارات بالشكل المناسب
echo '<div class="notification-icon">';
echo '<i class="fa fa-bell"></i>';
echo '<span class="badge">' . $notificationCount . '</span>';
echo '</div>';



$notificationicon = 3