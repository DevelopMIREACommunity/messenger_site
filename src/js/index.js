import "./import/modules";
import { get } from "http";


function ToggleMenu() { 
  document.getElementById('menu').classList.toggle('menu--active');
}
function CloseMenu() { 
  document.getElementById('menu').classList.remove('menu--active');
}
document.getElementById('menu-link').addEventListener("click", ToggleMenu);
document.getElementById('menu-close').addEventListener("click", CloseMenu);


// Чтобы изменить текст в футоре, измените константы text или contacts
// &nbsp; - это символ неразрывного пробела. Означает, что слова не буду разделяться при переносе
// <br> - символ переноса строки

const text = "Обращаем&nbsp;Ваше внимание&nbsp;на&nbsp;то, что&nbsp;данный интернет-сайт носит исключительно информационный характер и&nbsp;ни&nbsp;при&nbsp;каких условиях&nbsp;не&nbsp;является публичной&nbsp;офертой,<br class='hide-mob'/> определяемой&nbsp;положениями, описанными в части&nbsp;2&nbsp;на&nbsp;стр.&nbsp;437 Гражданского&nbsp;Кодекса Российской&nbsp;Федерации. <br> Все&nbsp;используемые логотипы&nbsp;являются собственностью&nbsp;их&nbsp;законных владельцев. Использование материалов&nbsp;сайта без&nbsp;согласия автора&nbsp; запрещено! <br> Copyright&nbsp;© Груздев&nbsp;Сергей 1999-2019  Copyright&nbsp;© Autoelectric 2002-2019";
const contacts =  "Наш&nbsp;адрес: Москва, ул.&nbsp;Люблинская&nbsp;д.&nbsp;171&nbsp;корпус&nbsp;1а. <br> Время&nbsp;работы с&nbsp;10-00&nbsp;до&nbsp;18-00, выходные: суббота,воскресенье <br> Телефоны: <a href='tel:+74955070308'><span class='number'>+7 (495) 507-03-08</span></a>, <a href='tel:+79037288535'><span class='number'>+7 (903) 728-85-35</span></a> <br>";

function setFooterText() {
  document.getElementById('footer-text').insertAdjacentHTML('afterbegin', text); 
  document.getElementById('footer-contacts').insertAdjacentHTML('afterbegin', contacts); 
}
setFooterText();