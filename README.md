# QueryBuilderOOP
База Данных-ка косылу жане QueryBuilder-компонентинин экземплярын $db переменныйга жазу 
$db = include "database/start.php";

read функциясын шакырып таблицанын атын жазу жане index.view.php осы файл да цикл аркылы шыгару
$posts = $db->read('posts');
include "index.view.php";

delete функциясын шакырып таблицанын атын жане идентификаторды жазу.Фукнция орындалып болганнан кейин бастапкы бетке кайту.
$db->delete('posts', $_GET['id']);
header('Location: /');
