<?php
/* $Id$ */

$charset = 'iso-8859-1';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Acesso Negado';
$strAction = 'A��es';
$strAddDeleteColumn = 'Add/Delete Field Columns'; //to translate (tbl_qbe.php3)
$strAddDeleteRow = 'Add/Delete Criteria Row'; //to translate (tbl_qbe.php3)
$strAddNewField = 'Adiciona novo campo';
$strAddPriv = 'Add a new Privilege'; //to translate
$strAddPrivMessage = 'You have added a new privilege.'; //to translate
$strAddSearchConditions = 'Condi��o de Pesquisa (Complemento da clausula "where"):';
$strAddUser = 'Add a new User'; //to translate
$strAddUserMessage = 'You have added a new user.'; //to translate
$strAfter = 'After'; //to translate
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = 'Analyze table'; //to translate
$strAnd = 'And'; //to translate (tbl_qbe.php3)
$strAny = 'Any'; //to translate
$strAnyColumn = 'Any Column'; //to translate
$strAnyDatabase = 'Any database'; //to translate
$strAnyHost = 'Any host'; //to translate
$strAnyTable = 'Any table'; //to translate
$strAnyUser = 'Any user'; //to translate
$strAscending = 'Ascending'; //to translate (tbl_qbe.php3)
$strAtBeginningOfTable = 'At Beginning of Table'; //to translate
$strAtEndOfTable = 'At End of Table'; //to translate
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBookmarkLabel = 'Label'; //to translate
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = 'View only'; //to translate
$strBrowse = 'Visualiza';

$strCantLoadMySQL = 'cannot load MySQL extension,<br />please check PHP Configuration.'; //to translate
$strCarriage = 'Carriage return: \\r';
$strChange = 'Muda';
$strCheckAll = 'Check All'; //to translate
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = 'Check table'; //to translate
$strColumn = 'Column'; //to translate
$strColumnEmpty = 'The columns names are empty!'; //to translate
$strColumnNames = 'Nome da Colunas';
$strCompleteInserts = 'Complete inserts'; //to translate
$strConfirm = 'Do you really want to do it?'; //to translate
$strCopyTableOK = 'Tabela %s copiada para %s.';
$strCreate = 'Cria';
$strCreateNewDatabase = 'Cria novo banco de dados';
$strCreateNewTable = 'Cria nova tabela no banco de dados ';
$strCriteria = 'Criteria'; //to translate (tbl_qbe.php3)

$strData = 'Data'; //to translate
$strDatabase = 'Banco de Dados ';
$strDatabases = 'Banco de Dados';
$strDataOnly = 'Data only'; //to translate
$strDbEmpty = 'The database name is empty!'; //to translate
$strDefault = 'Default';
$strDelete = 'Remove';
$strDeleted = 'Registro eliminado';
$strDeleteFailed = 'Deleted Failed!'; //to translate
$strDescending = 'Desending'; //to translate (tbl_qbe.php3)
$strDisplay = 'Display'; //to translate
$strDoAQuery = 'Fa�a uma "query by example" (wildcard: "%")';
$strDocu = 'Documenta��o';
$strDoYouReally = 'Confirma : ';
$strDrop = 'Elimina';
$strDropDB = 'Elimina o banco de dados: ';
$strDumpingData = 'Extraindo dados da tabela';
$strDynamic = 'dynamic'; //to translate

$strEdit = 'Edita';
$strEditPrivileges = 'Edit Privileges'; //to translate
$strEffective = 'Effective'; //to translate
$strEmpty = 'Limpa';
$strEmptyResultSet = 'MySQL retornou um set vazio (ex. zero regs).';
$strEnclosedBy = 'enclosed by'; //to translate
$strEnd = 'Fim';
$strError = 'Erro';
$strEscapedBy = 'escaped by'; //to translate
$strExtra = 'Extra'; //to translate

$strField = 'Campo';
$strFields = 'Qtd Campos';
$strFixed = 'fixed'; //to translate
$strFormat = 'Format'; //to translate
$strFunction = 'Fun�oes';

$strGenTime = 'Generation Time'; //to translate
$strGo = 'Executa';
$strGrants = 'Grants'; //to translate

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi criado.';
$strHome = 'Home';
$strHomepageOfficial = 'Official phpMyAdmin Homepage'; //to translate
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = 'Host';
$strHostEmpty = 'The host name is empty!'; //to translate

$strIfYouWish = 'Para carregar apenas algumas colunas da tabela, fa�a uma lista separada por virgula.';
$strIndex = 'Index';
$strIndexes = 'Indexes'; //to translate
$strInsert = 'Insere';
$strInsertAsNewRow = 'Insert as new row'; //to translate
$strInsertIntoTable = 'Insere na tabela';
$strInsertNewRow = 'Insere novo registro';
$strInsertTextfiles = 'Insere arquivo texto na tabela';
$strInUse = 'in use'; //to translate

$strKeyname = 'Keyname';
$strKill = 'Kill'; //to translate

$strLength = 'Length'; //to translate
$strLengthSet = 'Tamanho/Set*';
$strLimitNumRows = 'records per page'; //to translate
$strLineFeed = 'Linefeed: \\n';
$strLines = 'Linhas';
$strLocationTextfile = 'Localiza��o do arquivo textos';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Log out';

$strModifications = 'Modifica��es foram salvas';
$strModify = 'Modify'; //to translate (tbl_qbe.php3)
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensagens do MySQL : ';
$strMySQLShowProcess = 'Mostra os Processos';
$strMySQLShowStatus = 'Mostra informa��o de runtime do MySql';
$strMySQLShowVars = 'Mostra vari�veis de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Pr�ximo';
$strNo = 'N�o';
$strNoPassword = 'No Password'; //to translate
$strNoPrivileges = 'No Privileges'; //to translate
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strNoTablesFound = 'Nenhuma table encontrada no banco de dados';
$strNoUsersFound = 'No user(s) found.'; //to translate
$strNull = 'Null'; //to translate
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOftenQuotation = 'Often quotation marks. OPTIONALLY means that only char and varchar fields are enclosed by the "enclosed by"-character.'; //to translate
$strOptimizeTable = 'Optimize table'; //to translate
$strOptionalControls = 'Optional. Controls how to write or read special characters.'; //to translate
$strOptionally = 'OPTIONALLY';
$strOr = 'Or'; //to translate
$strOverhead = 'Overhead'; //to translate

$strPassword = 'Password'; //to translate
$strPasswordEmpty = 'The password is empty!'; //to translate
$strPasswordNotSame = 'The passwords aren\'t the same!'; //to translate
$strPHPVersion = 'PHP Version'; //to translate
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primary';
$strPrimaryKey = 'Chave Prim�ria';
$strPrinterFriendly = 'Printer friendly version of above table'; //to translate
$strPrintView = 'Print view'; //to translate
$strPrivileges = 'Privileges'; //to translate
$strProducedAnError = 'produziu um erro.';
$strProperties = 'Propriedades';

$strQBE = 'Query by Example';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php3)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php3)

$strReadTheDocs = 'Leia os docs';
$strRecords = 'Registros';
$strReloadFailed = 'Reinicializa��o do MySQL falhou.';
$strReloadMySQL = 'Reinicializa o MySQL';
$strRememberReload = 'Remember reload the server.'; //to translate
$strRenameTable = 'Renomeia a tabela para ';
$strRenameTableOK = 'Tabela %s renomeada para %s';
$strRepairTable = 'Repair table'; //to translate
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os dados da tabela pelos do arquivo';
$strReset = 'Reset';
$strReType = 'Re-type'; //to translate
$strRevoke = 'Revoke'; //to translate
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = 'You have revoked the privileges for'; //to translate
$strRevokePriv = 'Revoke Privileges'; //to translate
$strRowLength = 'Row length'; //to translate
$strRows = 'Rows'; //to translate
$strRowsFrom = 'rows starting from'; //to translate
$strRowsStatistic = 'Row Statistic'; //to translate
$strRunning = 'Rodando em ';
$strRunQuery = 'Submit Query'; //to translate (tbl_qbe.php3)

$strSave = 'Salva';
$strSelect = 'Seleciona';
$strSelectFields = 'Seleciones os campos (no m�nimo 1)';
$strSelectNumRows = 'in query'; //to translate
$strSend = 'envia';
$strSequence = 'Seq.'; //to translate
$strServerVersion = 'Server version'; //to translate
$strShow = 'Show'; //to translate
$strShowingRecords = 'Mostrando registros ';
$strSingly = '(singly)'; //to translate
$strSize = 'Size'; //to translate
$strSort = 'Sort'; //to translate (tbl_qbe.php3)
$strSpaceUsage = 'Space usage'; //to translate
$strSQLQuery = 'SQL-query';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'Dados CSV';
$strStrucData = 'Estrutura e dados';
$strStrucDrop = 'Adiciona \'drop table\'';
$strStrucOnly = 'Somente estrutura';
$strSubmit = 'Submete';
$strSuccess = 'Sua SQL-query foi executada com sucesso';
$strSum = 'Sum'; //to translate

$strTable = 'tabela ';
$strTableComments = 'Coment�rios da tabela';
$strTableEmpty = 'The table name is empty!'; //to translate
$strTableMaintenance = 'Table maintenance'; //to translate
$strTableStructure = 'Estrutura da tabela';
$strTableType = 'Table type'; //to translate
$strTerminatedBy = 'terminado por';
$strTextAreaLength = ' Because of its length,<br /> this field might not be editable '; //to translate
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substituiu o conte�do da tabela que tinha a mesma chave prim�ria ou �nica';
$strTheTerminator = 'Terminador de campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Uncheck All'; //to translate
$strUnique = 'Unique';
$strUpdateQuery = 'Update Query'; //to translate (tbl_qbe.php3)
$strUsage = 'Usage'; //to translate
$strUser = 'User'; //to translate
$strUserEmpty = 'The user name is empty!'; //to translate
$strUserName = 'User name'; //to translate
$strUsers = 'Users'; //to translate
$strUseTables = 'Use Tables'; //to translate (tbl_qbe.php3)

$strValue = 'Value';
$strViewDump = 'Ver o esquema da tabela';
$strViewDumpDB = 'Ver o esquema do banco de dados';

$strWelcome = 'Benvindo ao ';
$strWrongUser = 'Usu�rio ou Senha errado. Acesso Negado.';

$strYes = 'Sim';

// automatic generated by langxlorer.php (June 27, 2001, 6:53 pm)
// V0.11 - experimental (Steve Alberty - alberty@neptunlabs.de)
$strBinary = ' Binary ';  //to translate
$strBinaryDoNotEdit = ' Binary - do not edit ';  //to translate
$strEnglishPrivileges = ' Note: MySQL privilege names are expressed in English ';  //to translate
$strNotNumber = 'This is not a number!';  //to translate
$strNotValidNumber = ' is not a valid row number!';  //to translate

// export Zip (July 07, 2001, 19:48am)
$strBzip = '"bzipped"';  //to translate
$strGzip = '"gzipped"';  //to translate
$strZip = '"zipped"';  //to translate

// To translate
$strAffectedRows = 'Affected rows:';
$strDatabasesStats = 'Databases statistics';//to translate
$strDeletedRows = 'Deleted rows:';
$strDisplayOrder = 'Display order:';
$strDropTable = 'Drop table';
$strFieldsEmpty = ' The field count is empty! ';  //to translate
$strFormEmpty = 'Missing value in the form !';
$strFullText = 'Full Texts';//to translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strInsertedRows = 'Inserted rows:';
$strInstructions = 'Instructions';//to translate
$strInvalidName = '"%s" is a reserved word, you can\'t use it as a database/table/field name.'; //to translate
$strNbRecords = 'no. of records';
$strNoDatabases = 'No databases';
$strNoDropDatabases = '"DROP DATABASE" statements are disabled.';
$strNoModification = 'No change'; // To translate
$strPartialText = 'Partial Texts';//to translate
$strPmaDocumentation = 'phpMyAdmin Documentation';//to translate 
$strQueryOnDb = 'SQL-query on database ';
$strRowSize = ' Row size ';  //to translate
$strRunningAs = 'as';
$strServerChoice = 'Server Choice';//to translate 
$strSetEnumVal = 'If field type is "enum" or "set", please enter the values using this format: \'a\',\'b\',\'c\'...<br />If you ever need to put a backslash ("\") or a single quote ("\'") amongst those values, backslashes it (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowPHPInfo = 'Show PHP information';  // To translate
$strShowTables = 'Show tables';
$strShowThisQuery = ' Show this query here again ';  //to translate
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strTables = '%s table(s)';  //to translate
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
$strWithChecked = 'With checked:';
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strAnIndex = 'An index has been added on %s';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strDeleteUserMessage = 'You have deleted the user %s.';//to translate
$strKeepPass = 'Do not change the password';//to translate
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';  //to translate
$strNoQuery = 'No SQL query!';  //to translate
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
?>
