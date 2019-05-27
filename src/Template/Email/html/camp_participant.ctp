<tr>
  <td style="color: #634840; font-size: 24px;">
   Ahoj <?= $participant->first_name ?>!
  </td>
</tr>
<tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td style="padding: 20px 0 20px 0; color: #634840; font-size: 16px; line-height: 20px;">
          <strong>Tešíme sa z tvojho prihlásenia sa na INSIDE Tábor 2019!</strong> Pred INSIDE Táborom ti na túto mailovú adresu včas pošleme viac potrebných informácií.
          <br/>
          <br/>V prihláške máš nasledovné informácie:
          <br/>Meno: <?= $participant->first_name ?>
          <br/>Priezvisko: <?= $participant->last_name ?>
          <br/>Dátum narodenia: <?= $participant->birthday ?>
          <br/>Adresa: <?= $participant->residence ?>
          <br/>E-mail: <?= $participant->email ?>
          <?= $participant->idcard ? '<br/>Číslo občianskeho preukazu: '.$participant->idcard : '' ?>
          <?= $participant->parent_id ? '<br/>Meno a priezvisko rodiča (zákonného zástupcu): '.$participant->parent->name : '' ?>
          <?= $participant->parent_id ? '<br/>Telefonický kontakt na rodiča (zákonného zástupcu): '.$participant->parent->phone : '' ?>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px;">
    Uisťujeme ťa, že všetky tebou poskytnuté údaje sú v bezpečí a budeme s nimi narábať v súlade so zákonom a <a href="https://inside.sem.sk/pages/data_protection" target="_blank">podmienkami spracovania osobných údajov</a>, ktoré nájdeš na našom webe.
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px; font-style:italic;">
    Prípravy tábora už začali a čoskoro na webe nájdeš aj tému a program tábora. Dúfame, že aj ty sa tešíš na tábor aspoň tak, ako my :) Vidíme sa!<br>
    <a href="https://www.inside.sem.sk">www.inside.sem.sk</a>
  </td>
</tr>