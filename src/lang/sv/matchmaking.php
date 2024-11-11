<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Matchmaking Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'ispublic' => 'är offentlig (visa matchen offentligt för anmälan)',
    'ended' => 'har avslutats',
    'live' => 'är live',
    'draft' => 'utkast',
    'pending' => 'väntar',
    'waitforplayers' => 'Väntar på spelare',
    'match' => 'Match',
    'matchmaking' => 'Matchmaking',
    'matchowner' => 'Matchägare',
    'notsignedup' => 'Ej anmäld',
    'ownedmatches' => 'Dina ägda matcher',
    'ownedteams' => 'Matcher med lag som du har gått med i',
    'publicmatches' => 'Öppna offentliga matcher',
    'closedpublicmatches' => 'Live/Stängda offentliga matcher',
    'signedup' => 'Anmäld',
    'signupsclosed' => 'Anmälningar stängda',
    'teamcount' => 'Antal lag',
    'teamowner' => 'Lagägare',
    'teamsizes' => 'Lagstorlekar',
    'game' => 'Spel',
    'add' => 'Lägg till',
    'addteam' => 'Lägg till lag',
    'addmatch' => 'Lägg till match',
    'currentstatus' => 'Aktuell status:',
    'deletematch' => 'Ta bort match',
    'deleteteam' => 'Ta bort lag',
    'doyouwanttojointeam' => 'Vill du gå med i följande lag?',
    'editteam' => 'Redigera lag',
    'finalizematch' => 'Slutför match',
    'inviteurl' => 'Inbjudningslänk',
    'jointeam' => 'Gå med i lag',
    'switchteam' => 'Byt till lag',
    'successfullychangedteamplayer' => 'Lyckades byta lag!',
    'matchinviteurl' => 'Match inbjudningslänk',
    'name' => 'Namn',
    'openmatch' => 'Öppna match',
    'removefrommatch' => 'Ta bort från match',
    'leavematch' => 'Lämna match',
    'score' => 'Poäng',
    'startmatch' => 'Starta match',
    'submit' => 'Skicka',
    'team' => 'Lag',
    'user' => 'Användare',
    'editmatch' => 'Redigera match',
    'firstteamname' => 'Lag 1 Namn',
    'teamsize' => 'Lagstorlek',
    'teamcounts' => 'Antal lag',
    'teamname' => 'Lagnamn',
    'games' => 'Spel',
    'scoreof' =>'Poäng av',
    'thisisyourteam' => 'Detta är ditt lag!',
    'nopermissions' => 'Du har ingen tillgång till denna match! Du behöver antingen en inbjudningslänk från en matchägare eller lagägare, eller så måste matchägaren göra matchen offentlig!',
    'matchmakinghome' => 'Klicka här för att hitta andra matcher.',
    'maxopened' => 'Du har redan fler öppna matcher än tillåtet. Vänligen slutför dina matcher först!',
    'error' => 'Fel',

    'team_size_required' => 'Lagstorlek krävs',
    'team_size_mustbeoneof' => 'Lagstorlek måste vara en av: 1v1, 2v2, 3v3, 4v4, 5v5, 6v6',
    'team_count_required' => 'Antal lag krävs',
    'team_count_integer' => 'Lagstorlek måste vara ett heltal',
    'teamname_required' => 'Lagnamn krävs',
    'teamcount_smallerthangamesmin' => 'Antal lag mindre än valda spelets minimala lagantal! Min är ',
    'teamcount_biggerthangamesmax' => 'Antal lag större än valda spelets maximala lagantal! Max är ',
    'cannotcreatematch' => 'Kan inte skapa match!',
    'cannotcreatteambutcannotdeletematch' => 'Kan inte skapa Lag 1 men kan inte ta bort match! trasig databasinmatning!',
    'cannotcreateteam1' => 'Kan inte skapa Lag 1! Match ej skapad!',
    'cannotcreateteamplayer1butcannotdeleteteam' => 'Kan inte skapa lagspelare 1 men kan inte ta bort lag! trasig databasinmatning!',
    'cannotcreateteamplayer1butcannotdeletematch' => 'Kan inte skapa lagspelare 1 men kan inte ta bort match! trasig databasinmatning!',
    'cannotcreateteamplayer1' => 'Kan inte skapa lagspelare 1! Match och lag ej skapad!',
    'successfullycreatedmatch' => 'Matchen skapades framgångsrikt!',
    'cannotupdatematchnotowner' => 'Kan inte uppdatera matchen eftersom du inte är ägaren!',
    'cannotupdatematchstatus' => 'du kan inte uppdatera en match medan den är live eller avslutad!',
    'tomanyplayersforteamsize' => 'åtminstone ett lag har för många spelare för denna lagstorlek!',
    'cannotupdatematch' => 'Kan inte uppdatera match!',
    'successfullyupdatedmatch' => 'Matchen uppdaterades framgångsrikt!',
    'cannotaddteamstatus' => 'du kan inte lägga till ett lag medan matchen är live eller avslutad!',
    'cannotaddteamcount' => 'inga fler lag kunde läggas till på grund av lagbegränsningen!',
    'youalreadyareinateam' => 'kan inte lägga till lag eftersom du redan är medlem i ett lag!',
    'cannotcreateteam' => 'Kan inte skapa lag!',
    'cannotcreateteamplayerforowner' => 'Kan inte skapa lagspelare för lagägaren!',
    'successfullyaddedteam' => 'Lag lades till framgångsrikt!',
    'cannotupdateteamnotowner' => 'Kan inte uppdatera lag eftersom du inte är ägaren!',
    'cannotupdateteamstatus' => 'du kan inte uppdatera ett lag medan matchen är live eller avslutad!',
    'cannotsaveteam' => 'Kan inte spara lag!',
    'successfullyupdatedteam' => 'Laget uppdaterades framgångsrikt!',
    'cannotdeleteteamstatus' => 'du kan inte ta bort ett lag medan matchen är live eller avslutad!',
    'cannotdeleteinitialteam' => 'du kan inte ta bort det ursprungliga laget!',
    'cannotdeleteteamplayers' => 'Kan inte ta bort lagspelare!',
    'cannotdeleteteam' => 'Kan inte ta bort lag!',
    'deletedteam' => 'lag raderat!',
    'cannnotjoinstatus'=> 'du kan inte gå med i laget medan matchen är live eller avslutad!',
    'cannotjoinalreadyfull' => 'Laget är redan fullt!',
    'cannotcreateteamplayer' => 'Kan inte skapa lagspelare!',
    'successfiullyaddedteamplayer' => 'Gick med i laget framgångsrikt!',
    'cannotleavestatus' => 'du kan inte lämna laget medan matchen är live eller avslutad!',
    'cannotdeleteteamplayer' => 'Kan inte ta bort lagspelare!',
    'successfullydeletedteamplayer' => 'Lagspelare raderades framgångsrikt!',
    'cannotdeletematchnotowner' => 'Kan inte ta bort matchen eftersom du inte är ägaren!',
    'cannotdeleteplayers' => 'Kan inte ta bort spelare!',
    'cannotdeleteteams' => 'Kan inte ta bort lag!',
    'cannotdeletereplays' => 'Kan inte ta bort repriser!',
    'cannotdeletereplayfiles' => 'Kan inte ta bort reprissfiler!',
    'cannotdeletematch' => 'Kan inte ta bort match!',
    'successfullydeletedmatch' => 'Matchen raderades framgångsrikt!',
    'cannotstartmatchnotowner' => 'Kan inte starta matchen eftersom du inte är ägaren!',
    'matchalreadystartedorcompleted' => 'Matchen är redan live eller avslutad',
    'notallrequiredteamsarethere' => 'Inte alla nödvändiga lag är där',
    'notenoughplayerstostart' => 'åtminstone ett lag har inte tillräckligt många spelare för att starta matchen!',
    'cannotstartmatch' => 'Kan inte starta match!',
    'matchstarted' => 'Matchen startade!',
    'matchpending' => 'Matchstart begärdes, en administratör måste godkänna det!',
    'cannotopenmatchnotowner' => 'Kan inte öppna matchen eftersom du inte är ägaren!',
    'matchalreadyopenliveorcompleted' => 'Matchen är redan öppen/live eller avslutad',
    'cannotopenmatch' => 'Kan inte öppna match!',
    'matchopened' => 'Matchen öppnades!',
    'cannotfinalizenotowner' => 'Kan inte slutföra matchen eftersom du inte är ägaren!',
    'missingscoreforteam' => 'för åtminstone ett lag har ingen poäng angetts',
    'scorecouldnotbesetted' => 'Poäng för åtminstone ett lag kunde inte anges!',
    'cannotfinalize' => 'Kan inte slutföra. Matchen är fortfarande live!',
    'matchfinalized' => 'Matchen slutfördes!',
    'invitationnotfound' => 'Inbjudan hittades inte!',
    'pleaselogin' => 'Vänligen logga in.',
    'cannotjoinyoualreadyareinateam' => 'Du kan inte gå med i laget eftersom du redan är medlem i ett lag!',
    'scramble' => 'Blanda lag',
    'cannotjointhirdparty' => 'du kan inte gå med i denna match eftersom den nödvändiga tredje parts kontolänken på din användare saknas. Kontrollera avsnittet för enkel inloggning i din profil.',
    'cannotcreatethirdparty' => 'du kan inte skapa en match med detta spel eftersom den nödvändiga tredje parts kontolänken på din användare saknas. Kontrollera avsnittet för enkel inloggning i din profil.',
    'replayavailable' => 'Repris tillgänglig',
    'Replays' => 'Repriser',
    'ReplayName' => 'Namn',
    'ReplaySize' => 'Storlek',
    'ReplayCreated' => 'Skapad',

];