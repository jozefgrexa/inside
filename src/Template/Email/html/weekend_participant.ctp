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
          Juchuuuuuuuu! Prihlásil si sa na INSIDE Víkend. Tešíme sa z toho a HLAVNE: tešíme sa na stretnutie s tebou!! INSIDE Víkend je kopa zábavy a kopa tínedžerov ale ešte oveľa viac: spoznávanie Boha - Ježiša Krista tak, ako by si to nečakal! Máš sa na čo tešiť aj ty! :) Pred víkendom ti na túto mailovú adresu pošleme viac potrebných informácií.
          <br/>
          <br/>V prihláške si uviedol nasledovné informácie:
          <br/>Meno: <?= $participant->first_name ?>
          <br/>Priezvisko: <?= $participant->last_name ?>
          <br/>Dátum narodenia: <?= $participant->birthday ?>
          <br/>Adresa: <?= $participant->residence ?>
          <br/>E-mail: <?= $participant->email ?>
          <br/>Termín víkendu: <?= $participant->event->start_date ?> - <?= $participant->event->end_date ?>
          <br/>Cena: <?= $this->Number->currency($participant->event->price, 'EUR') ?>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px;">
    Uisťujeme ťa, že všetky tebou poskytnuté údaje sú v bezpečí a budeme s nimi narábať v súlade so zákonom a <a href="https://inside.sem.sk/ochrana-udajov" target="_blank">podmienkami spracovania osobných údajov</a>, ktoré nájdeš na našom webe.
  </td>
</tr>
<tr>
  <td style="padding: 30px 5px 20px 5px; color: #634840; font-size: 16px; line-height: 20px; font-style:italic;">
    Tešíme sa na stretnutie!<br>
    <a href="https://www.inside.sem.sk">www.inside.sem.sk</a>
  </td>
</tr>