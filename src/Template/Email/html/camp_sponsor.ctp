<tr>
  <td style="color: #634840; font-size: 24px;">
   Niekto chce prispieť na tábor ešte viac!
  </td>
</tr>
<tr>
  <td>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
        <td style="padding: 20px 0 20px 0; color: #634840; font-size: 16px; line-height: 20px;">
          <strong>Tento účastník pri prihlasovaní zaškrtol políčko "Rád by som prispel ešte viac"!</strong> Sľúbili sme, že sa mu ozveme!
          <br/>
          <br/>V prihláške uviedol nasledovné informácie:
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