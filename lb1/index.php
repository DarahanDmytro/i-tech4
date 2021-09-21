<!DOCTYPE html>
<html>
  <head lang="ua">
    <meta charset="utf-8">
    <title>Лабораторна 1. Дараган Д. М. КІУКІ-19-3</title>
  </head>
  <body bgcolor="#1ff" background="images/bg.gif">
    <header style="display: flex; flex-direction: column;">
      <h1 align="center">ЛАБОРАТОРНА РОБОТА №1</h1>
      <?php
        include "../username.php";
       ?>
     </header> 
    <table align="center" bgcolor="yellow">
      <colgroup width="33%" align="center">
      <colgroup width="33%" align="center">
      <colgroup width="33%" align="center">
	<tr valign="top" align="center">
	  <td>
      <h3>Текст</h3>
      <p>
	<i><b>E=mc<sup>2</sup></b></i>, где <b>E</b> - енергия объекта, <b>m</b> - его масса, <b>c</b> - скорость света в вакууме, равная 299 792 459 <i>м/c</i>.
      </p>
      <br>
      <h3>Гіперпосилання</h3>
      <p>
	<a href="ailleurs.php#phis">Стаття про фізику</a>
      </p>
     </td>
     <td>
     <h3>Список</h3>
     <select>
       <option disabled selected>СТУДЕНТИ ГРУПИ КІУКІ-19-5</option>
       <option>Білаш Дмитро Анатолієвич</option>
       <option>Бондаренко Катерина Володимирівна</option>
       <option>Дараган Дмитро Миколайович</option>
       <option>Долгополов Олексій Максимович</option>
       <option>Жук Максим Володимирович</option>
       <option>Жукова Анастасія Сергіївна</option>
       <option>Кононенко Анастасія Ігорівна</option>
       <option>Куценко Тимур Геннадиевич</option>
       <option>Мякшин Андрій Сергієвич</option>
       <option>Ніколаєв Олексій Євгенович</option>
       <option>Павленко Данило Володимирович</option>
       <option>Пасічнюк Родіон Русланович</option>
       <option>Первєєв Володимир Дмитрович</option>
       <option>Помелуйко Денис Андрійович</option>
       <option>Проценко Артем Сергійович</option>
       <option>Риндін Олексій Володимирович</option>
       <option>Сагайдачний Олександр Максимович</option>
       <option>Сергеєв Данило Володимирович</option>
       <option>Сергородцев Ілля Дмитрович</option>
       <option>Цвєтков Кирило Олександрович</option>
       <option>Чепурних Максим Андрійович</option>
     </select>
     <br>
     <h3>Форма</h3>
      <form action="index.html">
       <p>
         <label for="name">Ім'я</label>
	 <br>
         <input id="name" type="text" name="name" size="40">
	 <br>
	 <label for="sur">Прізвище</label>
	 <br>
         <input type="text" id="sur" name="surname" size="40">
         <br>
	 <label for="patr">По-батькові</label>
	 <br>
         <input type="text" id="patr" name="patronymic" size="40">
	 <br>
         <label for="group">Група</label>
	 <br>
	 <input id="group" type="text" name="group" size="40">
	 <br>
	 Стать
	 <br>
	 <span>
	   <label for="men">Чоловіча</label>
	   <input type="radio" id="men" name="sex" value="male">
           <label for="women">Жіноча</label>
	   <input type="radio" name="sex" value="female">
	 </span>
	 <br>
	 <label for="birth">Дата народження</label>
	 <input id="birth" name="birth" type="datetime-local">
	 <br>
	 <label for="cont">Контракт</label>
	 <input id="contract" type="checkbox" name="contract" value="Контракт">
	 <br><br>
	 <input type="submit" value="Відправити">
	 </p>
      </form>
       <a href="https://dec.nure.ua/ru/">
	<img src="images/magic.gif" alt="Відвідай Хогвартс">
      </a>
     </td>
     <td>
     <h3>Таблиця</h3>
     <table>
       <caption><b>Зміст</b></caption>
       <thead>
	 <tr>
	   <th>Розділ</th>
	   <th>Сторінка</th>
	 </tr>
       </thead>
	 <tbody>
	   <tr>
	     <td>Lorem</td>
	     <td>1</td>
	   </tr>
	    <tr>
	     <td>Ipsum</td>
	     <td>5</td>
	    </tr>
	     <tr>
	     <td>Dolor</td>
	     <td>10</td>
	    </tr>
	   <tr>
	     <td>Set</td>
	     <td>15</td>
	   </tr>
	   <tr>
	     <td>Amet</td>
	     <td>20</td>
	   </tr>
	   <tr>
	     <td>Consectetur</td>
	     <td>25</td>
	   </tr>
	   <tr>
	     <td>Adipiscing</td>
	     <td>30</td>
	   </tr>
	   <tr>
	     <td>Elit</td>
	     <td>35</td>
	   </tr>
	 </tbody>
	 </table>
	  </td>
    </tr>  
    </table>	
  </body>
</html>
