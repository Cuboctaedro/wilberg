MESSAGE
----
Name: <?= $data['name']; ?>
----
Email: <?= $data['email']; ?>
----
Telefonnummer: <?= $data['phone']; ?>
----
<?php if ($data['newsletter']) : ?>
Newsletter abonnieren: Ja
----
<?php endif; ?>
<?php if ($data['sms']) : ?>
SMS-Benachrichtigungen aktivieren: Ja
----
<?php endif; ?>
<?php if ($data['aktiv']) : ?>
Ich möchte aktiv mitmachen: Ja
----
<?php endif; ?>
<?php if ($data['spenden']) : ?>
Ich möchte spenden: Ja
----
<?php endif; ?>
Message:
<?= $data['message']; ?>
