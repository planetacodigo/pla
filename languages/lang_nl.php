<?php
// phpliteAdmin_lang_nl_1-9-6-dev
// Dutch (Flemish) language-texts By Leo Van Nieuwenhuyse.
$lang = array(
	"direction" => "LTR",
	"date_format" => 'j/n/Y \o\m G\ui (e)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
	"ver" => "versie",
	"for" => "voor",
	"to" => "naar:",
	"go" => "Start",
	"yes" => "Ja",
	"no" => "Neen",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Bestemmingstabel voor CSV-bestand: ",
	"srch" => "Zoeken",
	"srch_again" => "Andere Zoekopdracht",
	"login" => "Aanmelden",
	"logout" => "Afmelden",
	"view" => "View",
	"confirm" => "Bevestig",
	"cancel" => "Annuleer",
	"save_as" => "Opslaan als",
	"options" => "Opties",
	"no_opt" => "Geen opties",
	"help" => "Help",
	"installed" => "geïnstalleerd",
	"not_installed" => "niet geïnstalleerd",
	"done" => "gedaan",
	"insert" => "Invoegen",
	"export" => "Exporteren",
	"import" => "Importeren",
	"rename" => "Hernoemen",
	"empty" => "Leegmaken",
	"drop" => "Verwijderen",
	"tbl" => "Tabel",
	"chart" => "Diagram",
	"err" => "FOUT",
	"act" => "Actie",
	"rec" => "Records",
	"col" => "Kolom",
	"cols" => "Kolom(men)",
	"rows" => "rij(en)",
	"edit" => "Wijzigen",
	"del" => "Verwijderen",
	"add" => "Voeg",
	"backup" => "Reservekopie van databankbestand",
	"before" => "Voor",
	"after" => "Na",
	"passwd" => "Wachtwoord",
	"passwd_incorrect" => "Ongeldig wachtwoord.",
	"chk_ext" => "Controle van de ondersteunde SQLite PHP extensies",
	"autoincrement" => "Zelfincrementerend",
	"not_null" => "Niet NULL",
	"attention" => "Opgelet",
	"none" => "Geen",
	"as_defined" => "Zoals gedefiniëerd",
	"expression" => "Expressie",
	
	"sqlite_ext" => "SQLite extensie",
	"sqlite_ext_support" => "Het blijkt dat geen van de ondersteunde SQLite library extensies beschikbaar is in de installatie van PHP. U kan %s niet gebruiken tot u minstens één ervan installeert.",
	"sqlite_v" => "SQLite versie",
	"sqlite_v_error" => "Het blijkt dat uw databank in versie %s van SQLite staat, maar de installatie van PHP bevat niet de correcte extensies om deze versie te behandelen. Om dit probleem op te lossen kan u ofwel de databank verwijderen en %s toelaten om ze automatisch aan te maken, ofwel ze manueel aan te maken onder SQLite versie %s.",
	"report_issue" => "Het probleem kan niet correct geanalyseerd worden. Gelieve een rapport van het probleem te sturen naar",
	"sqlite_limit" => "Door de beperkingen van SQLite, kan enkel de veldnaam en het gegevenstype gewijzigd worden",
	
	"php_v" => "PHP versie",
	"new_version" => "Er bestaat een nieuwe versie!",	
	
	"db_dump" => "databank dump",
	"db_f" => "databank bestand",
	"db_ch" => "Kies een Databank",
	"db_event" => "Databank Event",
	"db_name" => "Databanknaam",
	"db_rename" => "Hernoem Databank",
	"db_renamed" => "Databank '%s' werd hernoemd naar",
	"db_del" => "Verwijder Databank",
	"db_path" => "Pad naar de databank",
	"db_size" => "Grootte van de databank",
	"db_mod" => "Databank laatst gewijzigd op",
	"db_create" => "Nieuwe Databank creëren",
	"db_vac" => "De databank, '%s', werd ge-VACUUMd.",
	"db_not_writeable" => "De databank, '%s', bestaat niet en kan niet gecreëerd worden omdat de map, '%s', niet beschrijfbaar is. De toepassing wordt onbruikbaar tot u de map beschrijfbaar maakt.",
	"db_setup" => "Er deed zich een probleem voor bij het opzetten van uw databank,%s. Er zal een poging gedaan worden om te achterhalen wat fout ging opdat u het probleem gemakkelijker zou kunnen oplossen.",
	"db_exists" => "Een databank, ander bestand of map met de naam '%s' bestaat reeds.",
	
	"exported" => "Geëxporteerd",
	"struct" => "Structuur",
	"struct_for" => "structuur voor",
	"on_tbl" => "on table",
	"data_dump" => "Gegevensdump voor",
	"backup_hint" => "Hint: De gemakkelijkste manier om een reservekopie van uw databank te maken is door het  %s.",
	"backup_hint_linktext" => "databankbestand te downloaden",
	"total_rows" => "een totaal van %s rijen",
	"total" => "Totaal",
	"not_dir" => "De map die u opgaf om naar databanken te zoeken bestaat niet of is geen map.",
	"bad_php_directive" => "Het blijkt dat de PHP-richtlijn, 'register_globals' ingeschakeld is. Dit is ten zeerste af te raden. U dient ze uit te schakelen voordat u verder gaat.",
	"page_gen" => "De pagina werd gegenereerd in %s seconden.",
	"powered" => "Aangedreven door",
	"free_software" => "Dit is vrije software.",
	"please_donate" => "Graag uw gift.",	
	"remember" => "Onthoud me op deze computer",
	"no_db" => "Welkom bij% s. Het blijkt dat u de keuze maakte een map te doorzoeken om databanken te kunnen beheren. Echter, %s kon geen geldige SQLite-databanken vinden. U kunt het formulier hieronder gebruiken om uw eerste databank aan te maken.",
	"no_db2" => "De map die u opgaf bevat geen bestaande te beheren databanken, en er kan niet in deze map geschreven worden. Dit betekent dat u geen nieuwe databanken met behulp van% s kunt maken. Maak ofwel de map beschrijfbaar, of plaats manueel databanken in de map.",
	
	"create" => "Creëer",
	"created" => "werd gecreëerd",
	"create_tbl" => "Creëer nieuwe tabel",
	"create_tbl_db" => "Creëer een nieuwe tabel op databank",
	"create_trigger" => "Creëren van een nieuwe trigger op tabel",
	"create_index" => "Creëren van een nieuwe index op tabel",
	"create_index1" => "Creëer Index",
	"create_view" => "Creëer een nieuwe view op databank",
	
	"trigger" => "Trigger",
	"triggers" => "Triggers",
	"trigger_name" => "Triggernaam",
	"trigger_act" => "Triggeractie",
	"trigger_step" => "Triggerstappen (beëindigd met een puntkomma)",
	"when_exp" => "WHEN expressie (typ de expressie zonder 'WHEN')",
	"index" => "Index",
	"indexes" => "Indexen",
	"index_name" => "Index naam",
	"name" => "Naam",
	"unique" => "Uniek",
	"seq_no" => "Volgnummer",
	"emptied" => "werd leeggemaakt",
	"dropped" => "werd verwijderd",
	"renamed" => "werd hernoemd naar",
	"altered" => "werd met succes gewijzigd",
	"inserted" => "toegevoegd",
	"deleted" => "verwijderd",
	"affected" => "geaffecteerd",
	"blank_index" => "Indexnaam mag niet leeg zijn.",
	"one_index" => "U dient minstens één indexkolom op te geven.",
	"docu" => "Documentatie",
	"license" => "Licentie",
	"proj_site" => "Project Site",
	"bug_report" => "Dit kan een bug zijn die gerapporteerd dient te worden aan",
	"return" => "Terugkeren",
	"browse" => "Verkennen",
	"fld" => "Veld",
	"fld_num" => "Aantal Velden",
	"fields" => "Velden",
	"type" => "Type",
	"operator" => "Operator",
	"val" => "Waarde",
	"update" => "Wijzigen",
	"comments" => "Commentaren",
	
	"specify_fields" => "U dient het aantal tabelvelden te specifiëren.",
	"specify_tbl" => "U dient een tabelnaam te specifiëren.",
	"specify_col" => "U dient een kolom te specifiëren.",
	
	"tbl_exists" => "Een Tabel met identieke naam bestaat reeds.",
	"show" => "Toon",
	"show_rows" => "%s rij(en) worden weergegeven. ",
	"showing" => "Bezig met weer te geven",
	"showing_rows" => "Weergave van records",
	"query_time" => "(Query duurde %s sec)",
	"syntax_err" => "Er is een probleem met de syntax van uw query (Query werd niet uitgevoerd)",
	"run_sql" => "Voer SQL query/queries uit op databank '%s'",
	
	"recent_queries" => "Recente Queries",
	"full_texts" => "Toon volledige teksten",
	"no_full_texts" => "Verkort lange teksten",
	
	"ques_empty" => "Bent u zeker dat u de tabel '%s' wenst leeg te maken?",
	"ques_drop" => "Bent u zeker dat u de tabel '%s' wenst te verwijderen?",
	"ques_drop_view" => "Bent u zeker dat u de view '%s' wenst te verwijderen?",
	"ques_del_rows" => "Bent u zeker dat u '%s' rij(en) van tabel '%s' wenst te verwijderen?",
	"ques_del_db" => "Bent u zeker dat u de databank '%s' wenst te verwijderen?",
	"ques_column_delete" => "Bent u zeker dat u %s kolomm(en) van tabel '%s' wenst te verwijderen?",
	"ques_del_index" => "Bent u zeker dat u de index '%s' wenst te verwijderen?",
	"ques_del_trigger" => "Bent u zeker dat u de trigger '%s' wenst te verwijderen?",
	"ques_primarykey_add" => "Bent u zeker dat u een primaire sleutel voor kolom(men) %s wenst toe te voegen in tabel '%s'?",
	
	"export_struct" => "Exporteren met structuur",
	"export_data" => "Exporteren met gegevens",
	"add_drop" => "Voeg DROP TABLE toe",
	"add_transact" => "Voeg TRANSACTION toe",
	"fld_terminated" => "Beëindig velden met: ",
	"fld_enclosed" => "Sluit velden in met: ",
	"fld_escaped" => "'Escape' velden met: ",
	"fld_names" => "Veldnamen in de eerste rij",
	"rep_null" => "Vervang NULL door: ",
	"rem_crlf" => "Verwijder 'CRLF' karakters uit de velden",
	"put_fld" => "Plaats de veldnamen in de eerste rij",
	"null_represent" => "NULL voorgesteld door: ",
	"import_suc" => "De Import was succesvol.",
	"import_into" => "Importeren in",
	"import_f" => "Bestand dat u wenst te importeren",
	"rename_tbl" => "Hernoem tabel '%s' naar:",
	
	"rows_records" => "rij(en) beginnend bij record # ",
	"rows_aff" => "rij(en) geaffecteerd. ",
	
	"as_a" => "als een",
	"readonly_tbl" => "'%s' is a view, which means it is a SELECT statement treated as a read-only table. You may not edit or insert records.",
	"chk_all" => "Alles aanvinken",
	"unchk_all" => "Alles uitvinken",
	"with_sel" => "Met als Selectie",
	
	"no_tbl" => "Geen tabel in de databank.",
	"no_chart" => "Indien u dit kunt lezen, betekent dit dat de grafie niet kon worden gegenereerd. De gegevens die u probeert te weer te geven zijn mogelijk niet geschikt voor een diagram.",
	"no_rows" => "Er zijn geen rijen in de tabel voor het bereik dat u koos.",
	"no_sel" => "U koos niets.",
	
	"chart_type" => "Type diagram",
	"chart_bar" => "Staafdiagram",
	"chart_pie" => "Taartdiagram",
	"chart_line" => "Lijndiagram",
	"lbl" => "Labels",
	"empty_tbl" => "Deze tabel is leeg.",
	"click" => "Klik hier",
	"insert_rows" => "om rijen toe te voegen.",
	"restart_insert" => "Opnieuw invoegen van: ",
	"ignore" => "Negeren",
	"func" => "Functie",
	"new_insert" => "Voeg een nieuwe rij toe",
	"save_ch" => "Wijzigingen Opslaan",
	"def_val" => "Verstekwaarde",
	"prim_key" => "Primaire Sleutel",
	"tbl_end" => "veld(en) toe aan het einde van de tabel",
	"query_used_table" => "Query die gebruikt werd om deze tabel te creëren",
	"query_used_view" => "Query die gebruikt werd om deze view te creëren",
	"create_index2" => "Creëer een index op",
	"create_trigger2" => "Creëer een nieuwe trigger",
	"new_fld" => "Nieuw(e) veld(en) toevoegen aan tabel '%s'",
	"add_flds" => "Velden Toevoegen",
	"edit_col" => "Opmaak van kolom '%s'",
	"vac" => "Vacuum",
	"vac_desc" => "Grote databanken moeten af en toe ge-VACUUMd worden om hun voetafdruk op de server te verminderen. Klik op de knop hieronder om databank '%s' te VACUUMen.",
	"event" => "Event",
	"each_row" => "Voor iedere rij",
	"define_index" => "Definiëer indexeigenschappen",
	"dup_val" => "Dubbele waarden",
	"allow" => "Toegelaten",
	"not_allow" => "Niet Toegelaten",
	"asc" => "Stijgend",
	"desc" => "Dalend",
	"warn0" => "U bent gewaarschuwd.",
	"warn_passwd" => "U gebruikt het standaard wachtwoord, wat gevaarlijk kan zijn. U kan het eenvoudig wijzigen bovenaan in %s.",
	"warn_dumbass" => "U wijzigde de waarde niet slimmerik ;-)",
	"counting_skipped" => "Het tellen van de records werd overgeslagen voor sommige tabellen omdat uw databank relatief groot is, en sommige tabellen geen primaire sleutels hebben, hierdoor zou het tellen langzaam worden. Voeg een primaire sleutel toe aan deze tabellen of %dwing het tellen af%s.",
	"sel_state" => "SELECT statement",
	"delimit" => "Scheidingsteken",
	"back_top" => "Terug naar boven<br /><br />",
	"choose_f" => "Kies bestand",
	"instead" => "In plaats van",
	"define_in_col" => "Defineëer index kolom(men)",
	
	"delete_only_managed" => "U kan enkel databanken die met deze tool beheerd worden verwijderen!",
	"rename_only_managed" => "U kan enkel databanken die met deze tool beheerd worden hernoemen!",
	"db_moved_outside" => "Je probeerde ofwel om de databank te verplaatsen naar een map waar ze niet langer kan worden beheerd, of het nazicht faalde wegens ontbrekende rechten.",
	"extension_not_allowed" => "De extensie die u opgaf is er geen uit de lijst van toegelaten extensies. Gelieve een van de volgende extensies te gebruiken",
	"add_allowed_extension" => "U kan extensies aan deze lijst toevoegen door deze in de \$allowed_extensions van het configuratiebestand toe te voegen.",
	"directory_not_writable" => "Het databankbestand op zich is beschrijfbaar, maar om erin weg te schrijven dient de map eveneens beschrijfbaar te zijn. De reden hiervoor is dat SQLite tijdelijke bestanden voor het vergrendelen in deze map plaatst.",
	"tbl_inexistent" => "Tabel %s bestaat niet",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Het wijzigen van tabel %s faalde",
	"alter_tbl_name_not_replacable" => "kon de tabelnaam niet vervangen door de tijdelijke naam",
	"alter_no_def" => "geen ALTER definitie",
	"alter_parse_failed" =>"onmogelijk om ALTER definitie te parsen",
	"alter_action_not_recognized" => "ALTER actie kon niet herkend worden",
	"alter_no_add_col" => "geen kolom om toe te voegen gevonden in het ALTER statement",
	"alter_pattern_mismatch"=>"Het patroon komt niet overeen met dat van de originele CREATE TABLE statement",
	"alter_col_not_recognized" => "de nieuwe of oude kolomnaal konden niet herkend worden",
	"alter_unknown_operation" => "Ongekende ALTER operatie!",
	
	/* Help documentation */
	"help_doc" => "Help Documentation",
	"help1" => "SQLite Library Extensies",
	"help1_x" => "<br />%s gebruikt PHP library extensies die de interactie met de SQLite databanken toelaten.<br /><br />Actueel ondersteund %s PDO, SQLite3 en SQLiteDatabase.<br /><br />Zowel PDO als SQLite3 kunnen overweg met versie 3 van SQLite, dit terwijl SQLiteDatabase overweg kan met versie 2.<br /><br />Indien uw PHP installatie meer dan één SQLite library extensie bevat, zullen PDO en SQLite3 voorrang krijgen, dit om een betere technologie te benutten.<br /><br/ >Als u echter over bestaande databanken met versie 2 van SQLite beschikt zal %s afdwingen om SQLiteDatabase te gebruiken voor die databanken.<br /><br />Niet alle databanken hoeven dezelfde versie te hebben.<br /><br />Tijdens het creëren van een databank zal echter de meest geavanceerde extensie gebruikt worden.<br /><br />",                                                   
	"help2" => "Een nieuwe databank creëren",
	"help2_x" => "<br />Als u een nieuwe databank creëert zal de naam die u opgaf aangevuld worden met een geschikte bestandsextensie<br />(.db, .db3, .sqlite, enz...), maar dit enkel indien u zelf geen extensie opgaf.<br /><br />De databank zal gecreëerd worden in de map die u specifiëerde in de \$directory variabele.<br /><br />",
	"help3" => "Tabellen vs. Views",
	"help3_x" => "<br />Op de databankhoofdpagina staat er een lijst van tabellen en views.<br /><br />Omdat views alleen-lezen zijn, zullen bepaalde handelingen worden uitgeschakeld. <br /><br />Deze uitgeschakelde handelingen onderscheiden zich door het weglaten ervan op de rij van de view waar ze dienden voor te komen.<br /><br />Indien u de gegevens van een view wenst te wijzigen dient u deze view te verwijderen en een nieuwe view te creëren met een passend SELECT statement die andere tabellen ondervraagt.<br /><br />Voor meer informatie, kijk naar <a href=\"http://en.wikipedia.org/wiki/View_(database)\" target=\"_blank\">http://en.wikipedia.org/wiki/View_(database)</a><br /><br />",
	"help4" => "Een SELECT statement schrijven voor een nieuwe View",
	"help4_x" => "<br />Wanneer u een nieuwe view wenst te creëren, dient u een SQL SELECT statement te schrijven dat het als de gegevens van de view zal gebruiken.<br /><br />Een view is gewoonweg een alleen-lezen tabel die toegankelijk is en ondervraagd kan worden als een reguliere tabel, met die uitzondering dat men de gegevens niet kan wijzigen door toevoeging of rijopmaak.<br /><br />Een view wordt vooral gebruikt om gemakkelijk gegevens op te halen.<br /><br />",	
	"help5" => "Exporteer een structuur naar een SQL-bestand",
	"help5_x" => "<br />Tijdens het proces voor het exporteren naar een SQL-bestand, kan u ervoor kiezen om de queries die de tabellen en de kolommen creëren mee in het bestand te plaatsen.<br /><br />",
	"help6" => "Exporteer gegevens naar een SQL-bestand",
	"help6_x" => "<br />Tijdens het proces voor het exporteren naar een SQL-bestand, kan u ervoor kiezen om de queries die de tabellen opvullen met de actuele gegevens van de tabellen mee in het bestand te plaatsen.<br /><br />",
	"help7" => "Voeg DROP TABLE toe aan een export SQL-bestand",
	"help7_x" => "<br />Tijdens het proces voor het exporteren naar een SQL-bestand, kan u ervoor kiezen om de queries die de bestaande tabellen verwijderen voor ze gecreëerd worden mee in het bestand te plaatsen, opdat er geen problemen zouden optreden bij creatie van tabellen die reeds zouden bestaan.<br /><br />",
	"help8" => "Voeg TRANSACTION toe aan een export SQL-Bestand",
	"help8_x" => "<br />Tijdens het proces voor het exporteren naar een SQL-bestand, kan u ervoor kiezen om een TRANSACTION rond de queries te plaatsen, opdat indien er zich een fout zou voordoen om het even wanneer tijdens de import van het geëxporteerd bestand, de databank terug kan gezet worden in zijn vorige staat, om zo gedeeltelijk gewijzigde gegevens op de databank te voorkomen.<br /><br />",
	"help9" => "Voeg COMMENT toe aan een export SQL-bestand",
	"help9_x" => "<br />Tijdens het proces voor het exporteren naar een SQL-bestand, kan u ervoor kiezen om commentaren die iedere stap van het proces uitleggen, mee in het bestand te plaatsen, opdat iedereen beter zou verstaan wat er gebeurd.<br /><br />"

);