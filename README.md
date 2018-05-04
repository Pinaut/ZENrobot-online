# ZENrobot-online
ZENrobot online project

Es gibt status.txt, pattern.txt & time.txt auf dem server. Raspy schreibt seinen Status dort rein und liest alle 10s (if idle) das pattern.txt aus.
Wenn Pattern geändert dann status.txt und time.txt mit geschätzter Endzeit beschreiben und Roboter starten.
start.php ist eine Weiche für jeden Status: idle, run, offline.
Der Raspberry hat also spätestens nach 10s seinen Befehl und kann die Endzeit in time.txt schreiben. Darum der 10s counter vor dem laden von run.php. Ansonsten hat die Seite eventuell keine aktuelle Endzeit beim script für den Counter. 
