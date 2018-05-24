<tr>
  <td style="color: #634840; font-family: Verdana, sans-serif; font-size: 18px;">
   Ahoj <?= $participant->first_name ?>!
  </td>
</tr>
<tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td style="padding: 20px 0 20px 0; color: #634840; font-family: Verdana, sans-serif; font-size: 12px; line-height: 20px;">
          Prihlásil si sa na INSIDE Games 2018. Tešíme sa z toho! Pred INSIDE Games ti na túto mailovú adresu pošleme viac potrebných informácií.
          <br/>Tvoje zaradenie v tíme: <?= $participant->team->name ?>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-family: Verdana, sans-serif; font-size: 12px; line-height: 20px; font-style:italic;">
    Tešíme sa na stretnutie!<br>
    <a href="http://www.inside.sem.sk">www.inside.sem.sk</a>
  </td>
</tr>