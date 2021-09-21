<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Лабораторна №2</title>
    <meta charset="utf-8">
    <meta name="ROBOTS" content="NOINDEX">
    <link rel="stylesheet" type="text/css" href="styles/lab2.css">
    <style type="text/css">
      input{
	  padding: 5px;
	  margin: 5px;
      }
      
      input:required:invalid{
          border: 2px solid red;
          background-color: #aaa; 
      }
      
       input:required:invalid + span.warn{
           visibility: visible;
	   color: red;
       }
       
      input:required{
	  border: 2px solid green;
	  background-color: lime;
      }

      input:optional{
          background-color: white;
	  border: 1px dotted black;
      }
      
      input:invalid{
          background-color: red;
      }
      
    </style>
  </head>
  <body>
    <header class="justificator" style="background-color: #a06;">      
      <h1>Лабораторна №2. Дараган Дмитро КІУКІ-19-5</h1>
    </header>
    <main>
       <?php
        include "../username.php";
       ?>
      <form id="myform" action="lab2.html"
	    style="float: right;
                   clear: left;
                   display: block"
	    class="justificator">
        <h4>Тестова форма</h4>
	<p>Email</p>
        <input type="email"  required>
	<span class="warn">!</span>
	<p>Tel</p>
	<input type="tel" required>
	<span class="warn">!</span>
	<p>Пошук</p>
	<input type="search">
	<p>URL</p>
	<input type="url">
	<p>Починати з S</p>
	<input type="text" pattern="^S.*">
	<p>Plain</p>
	<input type="text">
      </form>
       <article id="lorem" class="justificator">
	 <h2>Lorem ipsum dolor set amet</h2>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed urna diam, sollicitudin vel faucibus quis, tempus vitae purus. Nulla tincidunt ornare libero, ac lacinia orci porta sit amet. Etiam eget est at erat vestibulum consectetur et quis est. Mauris ex nisl, euismod id neque vitae, rhoncus sollicitudin lectus. Praesent nec nisi ullamcorper diam imperdiet blandit ut sed dolor. Donec malesuada leo ac condimentum consectetur. Praesent eget urna sed nisi mollis elementum. Cras commodo dapibus eros, ut ultricies urna varius vitae. Nullam magna nisi, dapibus ut dui in, tristique egestas urna. In elementum aliquam placerat. Suspendisse at dictum tortor. Integer pellentesque, leo in mollis finibus, nibh urna fringilla libero, sed dignissim urna diam eu quam. Nam metus magna, elementum a nulla eu, auctor hendrerit orci. Maecenas blandit efficitur viverra.
</p>
<p>
Quisque viverra sagittis tincidunt. Aenean faucibus ultrices orci, ut aliquam erat tempus eget. Nullam luctus metus elit, egestas hendrerit turpis aliquet at. Nullam id pulvinar elit. Quisque feugiat consequat dolor, pellentesque scelerisque quam luctus at. Vivamus euismod tempor velit a vulputate. Vivamus lobortis metus quam, in eleifend tortor ultricies at. Phasellus augue ante, luctus nec vehicula eget, interdum non lacus. Maecenas fringilla orci quis ligula imperdiet, non condimentum nisi imperdiet. Curabitur scelerisque nunc vitae massa auctor dignissim. Phasellus elementum condimentum tortor, ac iaculis tortor malesuada in. Praesent ultricies ultrices sem in dignissim. Mauris scelerisque ipsum nec tincidunt ultrices.
</p>
<p>
In tortor leo, eleifend eget nisi in, aliquet fringilla nisl. Proin scelerisque tincidunt odio, sit amet vulputate quam. Fusce laoreet id tellus ac finibus. Duis nec pretium lacus. In pellentesque, nisl sit amet pretium bibendum, nibh nunc molestie nisi, quis faucibus sem nulla eu arcu. Fusce vel venenatis nunc, ut ultrices mi. Donec ornare suscipit erat, id porta erat fermentum nec. Aliquam erat volutpat.
</p>
<p>
Vivamus et odio tellus. Duis scelerisque viverra commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam erat volutpat. Mauris in pulvinar sapien, a vehicula sem. Nunc fringilla at metus vel eleifend. Nunc a massa diam. Praesent fermentum pharetra pellentesque. Quisque semper blandit posuere. Donec tincidunt est lectus, eget sagittis dui sagittis a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
</p>
<p>
Mauris lectus elit, scelerisque in orci vel, vestibulum facilisis nunc. Curabitur facilisis metus non metus consequat, quis pulvinar nisl gravida. Mauris magna leo, molestie eget condimentum vel, tincidunt nec felis. Pellentesque mattis mi nunc, id eleifend turpis imperdiet sodales. Duis hendrerit lectus nec velit condimentum, sed iaculis arcu pellentesque. Aliquam dictum volutpat dolor ut mattis. Pellentesque urna lectus, efficitur eleifend malesuada in, porta eu orci. Etiam a nulla mattis, scelerisque dolor ac, consectetur dolor. Aenean erat ligula, viverra in arcu ac, efficitur dapibus quam. Nunc nisi nulla, faucibus eget nunc in, ornare tincidunt ante. Nullam dui nisl, suscipit a risus id, aliquet dignissim elit. Sed eleifend, diam quis auctor scelerisque, est nibh auctor odio, eget pellentesque massa lectus quis nunc. Vestibulum a lectus ac ex scelerisque ornare. Duis eu nisi ullamcorper, cursus enim non, dapibus ipsum. Morbi ut sem eros. Morbi velit risus, vulputate vitae ligula eu, mattis convallis mi.
</p>
<p>
Donec malesuada justo eu tortor rhoncus vulputate. Nullam sed porttitor purus. Suspendisse a condimentum erat. Nam placerat sollicitudin ante, nec tincidunt nulla consectetur et. Ut nunc quam, placerat id condimentum vitae, finibus ultricies sem. Curabitur elementum, ipsum vel suscipit iaculis, arcu urna semper risus, sed blandit est orci a diam. Proin eu turpis augue. In hac habitasse platea dictumst. Donec eget ante nec odio venenatis pharetra. Nullam vehicula quam id mattis bibendum. Donec pharetra turpis mollis volutpat varius. In feugiat lectus turpis, eget posuere nisl molestie sed. Vestibulum sagittis suscipit tortor non venenatis. Maecenas quis arcu sed dolor interdum lacinia.
</p>
<p>
Donec eleifend in turpis vel ornare. Curabitur odio diam, iaculis vel malesuada vel, imperdiet quis neque. Aenean gravida viverra tincidunt. Sed viverra massa et tempor sodales. Pellentesque porta libero magna, quis rutrum ex pharetra in. Vivamus in velit gravida, ornare massa sed, aliquet dolor. Praesent congue fermentum nisl, vel aliquam purus mollis vitae. Integer sed leo cursus, tempor nibh eu, egestas justo.
</p>
<p>
Mauris in massa suscipit, luctus ante vel, blandit nisl. Nulla mollis, nibh ut tristique mattis, dolor tortor pretium erat, quis aliquet mi elit id metus. Phasellus tempus tincidunt commodo. Nulla accumsan, turpis eget elementum aliquet, felis justo dictum lectus, sed faucibus lacus massa sit amet velit. Nullam tempus non sem ut egestas. Nulla lacinia placerat velit a accumsan. Morbi eget tristique libero. Mauris scelerisque vestibulum cursus. Nam id luctus sem. Donec vitae metus velit. Vivamus eget est vestibulum, pellentesque orci vel, pharetra nisl. Nulla et arcu non ex dignissim tincidunt eget in lacus. Vivamus semper lorem id volutpat maximus. Nullam ut dictum magna. Proin vel bibendum lorem. Aliquam erat volutpat.
</p>
<p>
Quisque vel nibh porta, tincidunt metus eu, ullamcorper nisi. Maecenas id nulla sit amet turpis dignissim cursus. Quisque a molestie enim. Mauris malesuada mauris eget metus facilisis egestas. In nec facilisis libero. Pellentesque eget egestas arcu, vitae luctus sapien. Pellentesque nec ex hendrerit, gravida orci vitae, maximus lectus. Sed luctus neque non elit dignissim, semper gravida est cursus. Quisque commodo, eros at hendrerit malesuada, arcu leo semper erat, quis laoreet urna diam ac felis. Phasellus viverra vel metus vitae consectetur.
</p>
<p>
  Nam fringilla ipsum ligula, non ultricies turpis pulvinar sed. Praesent nec convallis mi, eu hendrerit lorem. Nam convallis nunc nisi, non dignissim tortor iaculis id. Sed eget tortor auctor, consectetur velit sed, faucibus velit. Pellentesque eget mattis odio. Morbi non laoreet magna. Vivamus id dolor ex. Aliquam erat volutpat. Pellentesque cursus, augue ut dignissim elementum, urna tellus bibendum nisl, a iaculis enim dui fringilla leo. Quisque scelerisque at lacus eleifend ullamcorper. Vivamus scelerisque orci vel odio iaculis dictum. Duis condimentum ex nisl.
  </p>
      </article>
    </main>
    <footer style="background-color: #b15;">
      <a href="https://dec.nure.ua/ru/">
	<img src="images/magic.gif" alt="Відвідай Хогвартс">
      </a>
    </footer>
  </body>
</html>
