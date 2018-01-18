<?php
$prefix = 'gv-f';
include( 'include/gv18-tab.php' );
$signe = $_GET['p'];
$assets = 'images_landing/grande-voyance/18';
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<title>La Grande Voyance 2018 - MyAstro</title>
		<link rel="icon" type="image/png" href="<?= $assets; ?>/favicon.png"/>
		<link rel="stylesheet" href="css/grande-voyance-fb.css" type="text/css"/>
	</head>

	<body class="no-js" id="gvApp">
		<div class="loading">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="zodiac" class="colorized" xmlns:xlink="http://www.w3.org/1999/xlink">
				<defs>
					<symbol viewBox="0 0 32 32" id="♈" class="symbol Bélier fire cardinal" data-ldate="03-21" data-ndate="04-18">
						<path d="M14.83058 31.19484V29.6269c0-3.00973-.30515-6.3574-.8975-10.03395-.60584-3.69007-1.3418-6.6953-2.20342-9.0292C9.8404 5.5085 7.812 2.97635 5.63106 2.97635c-.96933 0-1.75915.42353-2.37843 1.2751-.60582.85154-.91098 1.9554-.91098 3.3251 0 1.80225.56992 3.66305 1.7367 5.58694H1.71338C.56905 11.0909-.00088 9.149-.00088 7.3422c0-1.87432.5385-3.41974 1.61104-4.65878 1.07254-1.2435 2.4278-1.8743 4.0478-1.8743 2.62524 0 4.8376 1.7662 6.682 5.3166C14.1709 9.6491 15.32422 14.389 15.8044 20.3499h.3949c.3994-5.83026 1.5392-10.5521 3.40605-14.14307 1.86683-3.59545 4.12857-5.3977 6.7538-5.3977 1.62002 0 2.9618.6218 4.03434 1.8518 1.0725 1.2165 1.611 2.76194 1.611 4.63626 0 1.81572-.56993 3.77114-1.70528 5.86624H27.9208c1.1533-2.07257 1.7367-3.96942 1.7367-5.7131 0-1.3922-.30515-2.5186-.8975-3.38368-.60583-.85607-1.40013-1.2886-2.3874-1.2886-2.10916 0-4.0837 2.36542-5.90116 7.07376-.93342 2.4015-1.7008 5.51485-2.34252 9.3446-.62826 3.81624-.9424 7.3306-.9424 10.52506v1.47332H14.8306z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♉" class="symbol Taureau earth fixe" data-ldate="04-20" data-ndate="05-13">
						<path d="M11.25373 11.85478c-1.1108-.4359-1.99397-.99438-2.6905-1.6664-.68286-.672-1.44312-1.75266-2.28077-3.2556L5.28548 5.1438C4.06542 2.95524 2.66782 1.8655 1.12454 1.8655H.6784V-.00068h1.2337c2.1943 0 4.18826 1.53926 5.96827 4.6087L9.237 6.9918c.92415 1.5665 1.87106 2.66078 2.8635 3.28284.99698.63114 2.29442.94444 3.90144.94444s2.90446-.3133 3.90144-.94444c.997-.62206 1.9439-1.71634 2.8544-3.28284L24.1417 4.608c1.7709-3.06944 3.7649-4.6087 5.9455-4.6087h1.23373v1.8662h-.43703c-1.55695 0-2.95455 1.09428-4.1746 3.2783l-.997 1.789c-.8331 1.50292-1.59335 2.58358-2.28077 3.2556-.69652.672-1.59336 1.2305-2.6905 1.66638 1.92114 1.05796 3.39158 2.42468 4.4341 4.07745 1.04705 1.65277 1.55692 3.47808 1.55692 5.44416 0 2.856-1.06072 5.3442-3.19126 7.4556-2.1442 2.1113-4.6481 3.1693-7.5389 3.1693-2.8908 0-5.3947-1.0534-7.5389-3.1694-2.1442-2.1159-3.214-4.5996-3.214-7.45566 0-1.9661.5235-3.7914 1.5706-5.44417 1.0425-1.65275 2.5129-3.0195 4.434-4.07743zm4.74365 17.64925c2.26712 0 4.19736-.78098 5.81803-2.37472 1.6071-1.5665 2.4174-3.4644 2.4174-5.6893 0-2.2612-.8103-4.1864-2.4037-5.7665-1.5933-1.5892-3.5372-2.3747-5.8317-2.3747-2.2807 0-4.2246.781-5.8453 2.3747-1.5933 1.5802-2.4037 3.5054-2.4037 5.7666 0 2.2249.8104 4.12286 2.4174 5.68937 1.6116 1.5892 3.5555 2.37473 5.8317 2.37473z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♊" class="symbol Gémeaux air mutable" data-ldate="05-21" data-ndate="06-21">
						<path d="M.4251 31.9998v-2.35697c2.62242-.6911 5.06453-1.18107 7.3057-1.4544V3.76776c-2.42665-.2269-4.8636-.6911-7.3057-1.39766V-.00234C4.65497 1.1684 9.84316 1.76152 15.9948 1.76152c6.16195 0 11.35014-.5931 15.58003-1.76386V2.3701c-2.4524.70657-4.89452 1.17075-7.32117 1.39767v24.42065c2.24118.2682 4.68328.7633 7.32117 1.4544v2.35697c-4.8224-1.26876-10.01058-1.8928-15.58002-1.8928-5.5746.00515-10.76277.62404-15.5697 1.8928zm10.13937-3.98158c1.62292-.18567 3.42616-.2682 5.43034-.2682 1.99904 0 3.80744.08253 5.43036.2682V3.96376c-1.46836.098-3.2716.15472-5.43034.15472-2.1742 0-3.97743-.05673-5.43033-.15472v24.05446z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♋" class="symbol Cancer water cardinal" data-ldate="06-21" data-ndate="07-20">
						<path d="M-.00292 25.1651v-2.7134c5.24536 2.39896 10.33336 3.5868 15.22903 3.5868 3.2114 0 5.8224-.41342 7.8331-1.2519-1.2763-.6463-2.238-1.47314-2.8733-2.45135-.6352-.98404-.9616-2.1544-.9616-3.4878 0-1.741.6353-3.24908 1.9-4.50678 1.2473-1.24606 2.7742-1.87492 4.5227-1.87492 1.7485 0 3.2347.62303 4.4877 1.86327 1.2356 1.24606 1.865 2.73085 1.865 4.4893 0 2.78327-1.7018 5.1007-5.1113 6.9465-3.4095 1.8458-7.6873 2.7716-12.822 2.7716-4.4469 0-9.1327-1.11212-14.0692-3.37133zm20.91733-6.31766c0 1.27518.4663 2.36985 1.3988 3.28984.9267.9258 2.0515 1.3858 3.3337 1.3858 1.2997 0 2.4012-.46 3.3104-1.34504.8976-.89088 1.3463-1.9972 1.3463-3.28984 0-1.32757-.4487-2.44553-1.3638-3.37135-.915-.93163-2.0107-1.3858-3.3104-1.3858-1.3113 0-2.4245.46-3.3453 1.3858-.9092.90835-1.3696 2.0205-1.3696 3.3306zM31.9938 6.85266v2.7192c-5.26284-2.39313-10.33335-3.5926-15.24068-3.5926-3.19968 0-5.82236.4134-7.84473 1.2577 1.2996.65214 2.2613 1.47315 2.8849 2.45718.6528.98404.9616 2.1544.9616 3.482 0 1.7468-.6236 3.24906-1.8884 4.50676-1.25888 1.24024-2.7742 1.8691-4.5343 1.8691-1.74845 0-3.23464-.6114-4.4702-1.86327-1.23558-1.2286-1.865-2.73086-1.865-4.4835 0-2.7949 1.7018-5.1298 5.1113-6.98142 3.3978-1.8399 7.68735-2.7716 12.822-2.7716 4.4469.0175 9.13272 1.1413 14.0634 3.4005zm-20.9115 6.31182c0-1.28682-.46042-2.3815-1.39876-3.3073-.93832-.91416-2.06316-1.37416-3.36284-1.37416s-2.4012.44835-3.29875 1.34505c-.90336.8967-1.35213 1.9972-1.35213 3.29565 0 1.32758.46043 2.43972 1.37545 3.37135.89754.9258 2.01072 1.3858 3.3104 1.3858s2.42453-.4658 3.33372-1.3858c.9266-.91417 1.3929-2.0263 1.3929-3.3306z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♌" class="symbol Lion fire fixe" data-ldate="07-23" data-ndate="08-10">
						<path d="M28.51155 29.47784c-1.83184 1.68306-3.58273 2.5182-5.25695 2.5182-1.44417 0-2.67107-.47722-3.66367-1.4402-.97982-.97148-1.46973-2.15602-1.46973-3.5664 0-1.88332.9926-4.93415 2.97354-9.14395l1.5166-3.2298c1.16725-2.4927 1.75088-4.5251 1.75088-6.0719 0-1.98134-.57085-3.5664-1.72533-4.7765-1.1545-1.2101-2.6796-1.80665-4.5839-1.80665-1.785 0-3.2164.5369-4.324 1.59785-1.09488 1.0823-1.6444 2.48413-1.6444 4.22686 0 1.6021.5112 3.4812 1.5379 5.6287l.6177 1.28255c1.0267 2.12196 1.5379 3.67294 1.5379 4.6913 0 1.59786-.6177 3.0082-1.83187 4.19276-1.2141 1.1888-2.6583 1.78104-4.3112 1.78104-1.70404 0-3.161-.59653-4.34956-1.79385-1.2013-1.2016-1.7977-2.6588-1.7977-4.3845 0-1.6575.5836-3.08918 1.7722-4.29077 1.18-1.20155 2.5901-1.8066 4.2217-1.8066.59214 0 1.2482.10226 1.95963.33235-1.13313-2.18586-1.704-4.10326-1.704-5.78634 0-2.1816.7796-3.99676 2.35584-5.4412 1.5848-1.45723 3.57-2.18585 5.94712-2.18585 2.61143 0 4.71165.77123 6.2964 2.29664 1.57624 1.5424 2.3686 3.5834 2.3686 6.1229 0 1.25696-.1278 2.3563-.3962 3.2724-.2556.9161-.88607 2.43297-1.8659 4.54214l-1.08206 2.3691c-1.93408 4.197-2.9139 6.90696-2.9139 8.1469 0 .9033.2684 1.6575.81794 2.237.53677.5965 1.23543.88625 2.07466.88625 1.10763 0 2.37713-.6306 3.8-1.89186l1.37175 1.49136zM5.2387 19.20047c0 1.23993.42174 2.29238 1.2482 3.13604.82646.8395 1.84462 1.2698 3.05448 1.2698 1.18857 0 2.1897-.4303 3.02892-1.2783.83924-.8564 1.261-1.8876 1.261-3.1019 0-1.23567-.4175-2.2796-1.24822-3.12326-.83923-.8394-1.85313-1.26976-3.06726-1.26976-1.18856 0-2.19394.43037-3.03318 1.2783-.82646.8522-1.24395 1.87907-1.24395 3.08918z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♍" class="symbol Vierge earth mutable" data-ldate="08-23" data-ndate="09-16">
						<path d="M7.36122 9.74775v15.5984H4.86507V7.2734c0-2.50608-.6853-4.7901-2.0514-6.8158H5.446c.93037 1.27795 1.56576 2.92752 1.91068 4.91698.84415-2.07103 1.82446-3.70247 2.93184-4.917l2.44623-.46223c1.11646 1.43204 1.82446 3.349 2.124 5.7327.57184-1.7991 1.58845-3.56198 3.04076-5.27046l2.41-.4623c1.35244 1.8762 2.02414 3.9472 2.02414 6.2131v4.7357c.6717-1.8943 1.38423-3.39885 2.1376-4.4638l2.06047-.7568c1.77454 2.74174 2.65954 5.63755 2.65954 8.6557 0 2.4064-.53554 4.64963-1.58846 6.766-1.05293 2.1118-2.65954 4.065-4.76992 5.8913.1997 1.46375 1.0575 3.11332 2.5733 4.9623h-2.9318c-.708-.89277-1.33882-2.0846-1.888-3.562-1.55213.87464-3.46736 1.50003-5.7275 1.8626v-2.139c2.1376-.4351 3.87583-1.065 5.2419-1.87167-.17246-1.07857-.26323-2.16166-.26323-3.2493V7.90783c0-2.4698-.34947-4.3369-1.06655-5.5922-1.76093 1.88976-3.068 4.5771-3.91216 8.0122v15.0183H12.349V8.75078c0-3.09067-.37215-5.22967-1.09377-6.4306C9.5306 4.32773 8.2417 6.793 7.36123 9.74777zm14.9769 14.95942c1.46592-1.49096 2.54607-3.07708 3.27676-4.78104.72162-1.6994 1.08015-3.50306 1.08015-5.40188 0-1.994-.4357-3.92906-1.30253-5.80522-1.24354 1.5272-2.24654 3.56198-3.05438 6.10432v9.88382z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♎" class="symbol Balance air cardinal" data-ldate="09-23" data-ndate="10-30">
						<path d="M.00153 29.3664v-2.9651h31.99994v2.9651H.00153zm12.64435-11.67907v2.75792H-.00496v-2.96508h8.86402c-1.6146-1.6444-2.41864-3.49595-2.41864-5.53525 0-2.55075.9467-4.71953 2.83363-6.55814 1.88044-1.83214 4.124-2.75144 6.7307-2.75144 2.5937 0 4.83726.9193 6.7177 2.75144 1.89342 1.8386 2.83364 4.01387 2.83364 6.55814 0 2.04577-.80408 3.89733-2.41867 5.53525h8.85105v2.96508H19.33765v-2.75792c2.15278-1.3919 3.23566-3.2564 3.23566-5.59998 0-1.77387-.6549-3.2823-1.9453-4.55768-1.30332-1.28833-2.8466-1.92277-4.62327-1.92277-1.80912 0-3.35238.63444-4.64275 1.92277-1.2904 1.2689-1.9453 2.7838-1.9453 4.55768.0065 2.34357 1.0764 4.20808 3.22917 5.59998z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♏" class="symbol Scorpion water fixe" data-ldate="10-23" data-ndate="11-20">
						<path d="M3.51737 25.09497V7.53232c0-2.9174-.68424-5.28806-2.0706-7.05374H4.0898c.9302 1.4206 1.55183 3.02944 1.88277 4.8444.78263-1.94044 1.7486-3.5448 2.889-4.8444l2.3747-.4795c1.11357 1.30408 1.81122 3.16387 2.1198 5.58383.59927-1.7298 1.59208-3.4372 2.96056-5.1043l2.4239-.4795c1.32375 1.79257 1.98115 3.91227 1.98115 6.3636v15.3309c0 1.60436.0626 2.6978.15653 3.26696.12526.56914.3712 1.0621.7603 1.4923.69766.73496 1.87383 1.10244 3.5151 1.10244h1.5071v-2.4648l3.89077 3.52238-3.89076 3.38347v-2.39308h-2.25395c-2.15558 0-3.7074-.56465-4.6734-1.69397-.9794-1.13828-1.46685-2.9443-1.46685-5.43147v-14.829c0-2.50062-.3533-4.29318-1.0778-5.38216-1.83805 2.1242-3.12156 4.76374-3.8326 7.9545V25.086h-2.4597V8.51376c0-2.98013-.3533-5.064-1.0778-6.25605-1.762 1.9853-3.03657 4.4635-3.84156 7.4078v15.41605l-2.45967.01344z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♐" class="symbol Sagittaire fire mutable" data-ldate="11-22" data-ndate="12-18">
						<path d="M29.89044 2.10182l2.1102 15.02147-3.00192.4661L27.45345 6.641 13.73432 20.40837l6.458 6.45918-2.1545 2.1586-6.45802-6.47027-9.48764 9.4446-2.0936-2.092 9.47103-9.4668-6.4414-6.4703 2.12126-2.1586 6.458 6.47028L25.35433 4.5379l-10.9277-1.53158.4708-3.00763 14.993 2.1031z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♑" class="symbol Capricorne earth cardinal" data-ldate="12-22" data-ndate="01-20">
						<path d="M6.1102 18.90826v-.86977c0-1.6208-.28524-3.8974-.8415-6.8536-.5705-2.9563-1.09347-4.8907-1.5784-5.808C3.00567 4.0746 1.9407 3.414.47165 3.414H.001V1.3655h1.86366c1.74956 0 2.95715.68442 3.6275 2.04848.79396 1.654 1.5166 4.38213 2.1727 8.20817.94134-4.22053 2.51024-7.63307 4.71622-10.25664l3.28995-.6321c.80822 1.8251 1.47857 4.5675 2.01105 8.2272l.46116 3.04187c.14738 1.0694.24722 1.8251.29952 2.27187.19968 1.8251.46116 3.2034.75593 4.13497 1.6021-3.07033 3.8224-4.6055 6.6559-4.6055 1.702 0 3.1521.5941 4.3454 1.7633 1.2028 1.1692 1.80183 2.5903 1.80183 4.26806 0 1.78706-.60854 3.327-1.81613 4.5675-1.2171 1.25473-2.69565 1.8821-4.43096 1.8821-2.37235 0-4.4452-.9173-6.2233-2.7614-1.26464 3.327-2.3819 5.44676-3.35176 6.3688s-2.5578 1.37834-4.7685 1.37834H9.15293v-2.077h1.05544c2.13463 0 3.6037-.4325 4.4072-1.3023.79392-.8555 1.8256-3.11787 3.0665-6.7728-.561-.9886-.93188-1.81084-1.103-2.47624-.17118-.66065-.3994-2.096-.67038-4.3346l-.63234-4.7671c-.40885-3.14163-.8938-5.29942-1.4548-6.47813C12.4048 4.7401 11.1782 7.01197 10.14654 9.8827c-1.0412 2.86594-1.5499 5.423-1.5499 7.68533v1.3403H6.1102zM20.0925 21.413c1.80185 2.00096 3.637 3.0038 5.4769 3.0038 1.24086 0 2.2868-.4325 3.1188-1.30227.832-.8555 1.24085-1.94867 1.24085-3.24144 0-1.155-.3946-2.1483-1.19332-2.9658-.78445-.808-1.74956-1.2168-2.88108-1.2168-2.44844.00476-4.37392 1.91065-5.76216 5.72243z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♒" class="symbol Verseau air fixe" data-ldate="01-20" data-ndate="02-16">
						<path d="M-.00608 24.95724l9.6789-6.3838 2.119 4.945 7.48995-4.945 2.09803 4.945 7.50394-4.945 3.0981 7.2778-2.00713.88704-2.07003-4.945-7.5319 4.945-2.09804-4.945-7.46897 4.945-2.10502-4.945-7.5319 4.945-1.1749-1.78104zm.014-13.3124l9.67888-6.3908 2.119 4.94502 7.50395-4.945 2.09802 4.945 7.49695-4.945 3.0981 7.2778-2.00713.88704-2.07007-4.945-7.5459 4.945-2.09802-4.945-7.46897 4.945-2.08404-4.945-7.5319 4.945-1.1889-1.77406z"></path>
					</symbol>
					<symbol viewBox="0 0 32 32" id="♓" class="symbol Poisson water mutable" data-ldate="02-19" data-ndate="03-11">
						<path d="M12.8588 16.5018c0 2.50265-.59373 5.16068-1.7479 7.95743-1.1708 2.7912-2.71895 5.31606-4.6777 7.5468H3.1094c4.47796-4.72784 6.71416-9.89407 6.71416-15.50424H3.3369v-2.2807h6.48666C9.55166 9.3323 7.31546 4.59335 3.1094.00422h3.14622c3.85648 4.11745 6.0594 8.8564 6.60318 14.21685h6.2869c.56042-5.36046 2.76333-10.0994 6.6087-14.21686h3.14067C24.689 4.59338 22.45835 9.33234 22.1809 14.2211h6.48665v2.2807H22.1809c0 5.62125 2.2362 10.78194 6.71416 15.50424H25.5879c-1.9754-2.23075-3.52353-4.7556-4.69435-7.5468-1.15418-2.7912-1.7479-5.44924-1.7479-7.95745h-6.2869z"></path>
					</symbol>
				</defs>
				<g class="pie" transform="translate(256,256)">
					<text dy=".25em" class="pie-label" text-anchor="middle">My Astro</text>
					<circle class="circumference" r="226.8" style="fill: none;"></circle>
				</g>
				<g class="arcs" transform="translate(256,256)">
					<a xlink:href="/gv-f?p=bel<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Bélier" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M1.3847052877801002e-14,-226.13953488372093A226.13953488372093,226.13953488372093 0 0,1 113.06976744186044,-195.84258200929958L55.06976744186045,-95.38363517030469A110.13953488372093,110.13953488372093 0 0,0 6.744101442746354e-15,-110.13953488372093Z"></path>
					</a>
					<a xlink:href="/gv-f?p=tau<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Taureau" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M113.06976744186044,-195.84258200929958A226.13953488372093,226.13953488372093 0 0,1 195.84258200929955,-113.06976744186046L95.38363517030467,-55.06976744186046A110.13953488372093,110.13953488372093 0 0,0 55.06976744186045,-95.38363517030469Z"></path>
					</a>
					<a xlink:href="/gv-f?p=gem<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Gémeaux" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M195.84258200929955,-113.06976744186046A226.13953488372093,226.13953488372093 0 0,1 226.13953488372093,0L110.13953488372093,0A110.13953488372093,110.13953488372093 0 0,0 95.38363517030467,-55.06976744186046Z"></path>
					</a>
					<a xlink:href="/gv-f?p=can<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Cancer" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M226.13953488372093,0A226.13953488372093,226.13953488372093 0 0,1 195.84258200929958,113.06976744186042L95.38363517030469,55.06976744186044A110.13953488372093,110.13953488372093 0 0,0 110.13953488372093,0Z"></path>
					</a>
					<a xlink:href="/gv-f?p=lio<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Lion" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M195.84258200929958,113.06976744186042A226.13953488372093,226.13953488372093 0 0,1 113.06976744186053,195.84258200929952L55.0697674418605,95.38363517030466A110.13953488372093,110.13953488372093 0 0,0 95.38363517030469,55.06976744186044Z"></path>
					</a>
					<a xlink:href="/gv-f?p=vie<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Vierge" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M113.06976744186053,195.84258200929952A226.13953488372093,226.13953488372093 0 0,1 1.142731802401733e-13,226.13953488372093L5.565588046251139e-14,110.13953488372093A110.13953488372093,110.13953488372093 0 0,0 55.0697674418605,95.38363517030466Z"></path>
					</a>
					<a xlink:href="/gv-f?p=bal<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Balance" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M1.142731802401733e-13,226.13953488372093A226.13953488372093,226.13953488372093 0 0,1 -113.06976744186032,195.84258200929966L-55.0697674418604,95.38363517030473A110.13953488372093,110.13953488372093 0 0,0 5.565588046251139e-14,110.13953488372093Z"></path>
					</a>
					<a xlink:href="/gv-f?p=sco<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Scorpion" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M-113.06976744186032,195.84258200929966A226.13953488372093,226.13953488372093 0 0,1 -195.84258200929952,113.06976744186053L-95.38363517030466,55.0697674418605A110.13953488372093,110.13953488372093 0 0,0 -55.0697674418604,95.38363517030473Z"></path>
					</a>
					<a xlink:href="/gv-f?p=sag<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Sagittaire" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M-195.84258200929952,113.06976744186053A226.13953488372093,226.13953488372093 0 0,1 -226.13953488372093,2.7694105755602005e-14L-110.13953488372093,1.3488202885492709e-14A110.13953488372093,110.13953488372093 0 0,0 -95.38363517030466,55.0697674418605Z"></path>
					</a>
					<a xlink:href="/gv-f?p=cap<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Capricorne" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M-226.13953488372093,2.7694105755602005e-14A226.13953488372093,226.13953488372093 0 0,1 -195.84258200929955,-113.06976744186049L-95.38363517030467,-55.06976744186048A110.13953488372093,110.13953488372093 0 0,0 -110.13953488372093,1.3488202885492709e-14Z"></path>
					</a>
					<a xlink:href="/gv-f?p=ver<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Verseau" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M-195.84258200929955,-113.06976744186049A226.13953488372093,226.13953488372093 0 0,1 -113.06976744186038,-195.8425820092996L-55.06976744186042,-95.3836351703047A110.13953488372093,110.13953488372093 0 0,0 -95.38363517030467,-55.06976744186048Z"></path>
					</a>
					<a xlink:href="/gv-f?p=poi<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<path class="arc Poisson" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" d="M-113.06976744186038,-195.8425820092996A226.13953488372093,226.13953488372093 0 0,1 1.5931109609134157e-13,-226.13953488372093L7.7591253711291e-14,-110.13953488372093A110.13953488372093,110.13953488372093 0 0,0 -55.06976744186042,-95.3836351703047Z"></path>
					</a>
				</g>
				<g class="labels" transform="translate(256,256)">
					<a xlink:href="/gv-f?p=bel<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Bélier" transform="translate(43.52,-162.41)" text-anchor="middle">Bélier</text>
					</a>
					<a xlink:href="/gv-f?p=tau<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Taureau" transform="translate(118.89,-118.89)" text-anchor="middle">Taureau</text>
					</a>
					<a xlink:href="/gv-f?p=gem<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Gémeaux" transform="translate(162.41,-43.52)" text-anchor="middle">Gémeaux</text>
					</a>
					<a xlink:href="/gv-f?p=can<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Cancer" transform="translate(162.41,43.52)" text-anchor="middle">Cancer</text>
					</a>
					<a xlink:href="/gv-f?p=lio<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Lion" transform="translate(118.89,118.89)" text-anchor="middle">Lion</text>
					</a>
					<a xlink:href="/gv-f?p=vie<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Vierge" transform="translate(43.52,162.41)" text-anchor="middle">Vierge</text>
					</a>
					<a xlink:href="/gv-f?p=bal<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Balance" transform="translate(-43.52,162.41)" text-anchor="middle">Balance</text>
					</a>
					<a xlink:href="/gv-f?p=sco<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Scorpion" transform="translate(-118.89,118.89)" text-anchor="middle">Scorpion</text>
					</a>
					<a xlink:href="/gv-f?p=sag<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Sagittaire" transform="translate(-162.41,43.52)" text-anchor="middle">Sagittaire</text>
					</a>
					<a xlink:href="/gv-f?p=cap<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Capricorne" transform="translate(-162.41,-43.52)" text-anchor="middle">Capricorne</text>
					</a>
					<a xlink:href="/gv-f?p=ver<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Verseau" transform="translate(-118.89,-118.89)" text-anchor="middle">Verseau</text>
					</a>
					<a xlink:href="/gv-f?p=poi<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<text class="label Poisson" transform="translate(-43.52,-162.41)" text-anchor="middle">Poisson</text>
					</a>
				</g>
				<g class="containers" transform="translate(256,256)">
					<a xlink:href="/gv-f?p=bel<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Bélier" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="219.07" cy="58.7" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=tau<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Taureau" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="160.37" cy="160.37" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=gem<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Gémeaux" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="58.7" cy="219.07" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=can<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Cancer" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-58.7" cy="219.07" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=lio<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Lion" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-160.37" cy="160.37" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=vie<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Vierge" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-219.07" cy="58.7" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=bal<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Balance" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-219.07" cy="-58.7" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=sco<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Scorpion" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-160.37" cy="-160.37" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=sag<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Sagittaire" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="-58.7" cy="-219.07" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=cap<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Capricorne" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="58.7" cy="-219.07" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=ver<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Verseau" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="160.37" cy="-160.37" transform="rotate(-90, 0, 0)"></circle>
					</a>
					<a xlink:href="/gv-f?p=poi<?=count($parms) ? "&".join('&', $parms) : ""?>">
						<circle class="container Poisson" fill="#8f6083" stroke="rgba(255, 255, 255, 0.2)" r="23.81" cx="219.07" cy="-58.7" transform="rotate(-90, 0, 0)"></circle>
					</a>
				</g>
				<g class="signs" transform="translate(256,256)">
					<g class="sign Bélier" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♈" width="32px" height="32px" fill="#fff" transform="translate(235 42) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Taureau" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♉" width="32px" height="32px" fill="#fff" transform="translate(176 144) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Gémeaux" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♊" width="32px" height="32px" fill="#fff" transform="translate(74 203) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Cancer" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♋" width="32px" height="32px" fill="#fff" transform="translate(-42 203) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Lion" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♌" width="32px" height="32px" fill="#fff" transform="translate(-144 144) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Vierge" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♍" width="32px" height="32px" fill="#fff" transform="translate(-203 42) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Balance" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♎" width="32px" height="32px" fill="#fff" transform="translate(-203 -74) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Scorpion" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♏" width="32px" height="32px" fill="#fff" transform="translate(-144 -176) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Sagittaire" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♐" width="32px" height="32px" fill="#fff" transform="translate(-42 -235) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Capricorne" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♑" width="32px" height="32px" fill="#fff" transform="translate(74 -235) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Verseau" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♒" width="32px" height="32px" fill="#fff" transform="translate(176 -176) rotate(90, 0, 0)"></use>
					</g>
					<g class="sign Poisson" transform="rotate(-90, 0, 0)">
						<use xlink:href="#♓" width="32px" height="32px" fill="#fff" transform="translate(235 -74) rotate(90, 0, 0)"></use>
					</g>
				</g>
			</svg>
		</div>
		<nav>
			<ul>
				<li><a href="/gv-f?p=bel<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-bel">Bélier</a></li>
				<li><a href="/gv-f?p=tau<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-tau">Taureau</a></li>
				<li><a href="/gv-f?p=gem<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-gem">Gémeaux</a></li>
				<li><a href="/gv-f?p=can<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-can">Cancer</a></li>
				<li><a href="/gv-f?p=lio<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-lio">Lion</a></li>
				<li><a href="/gv-f?p=vie<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-vie">Vierge</a></li>
				<li><a href="/gv-f?p=bal<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-bal">Balance</a></li>
				<li><a href="/gv-f?p=sco<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-sco">Scorpion</a></li>
				<li><a href="/gv-f?p=sag<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-sag">Sagittaire</a></li>
				<li><a href="/gv-f?p=cap<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-cap">Capricorne</a></li>
				<li><a href="/gv-f?p=ver<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-ver">Verseau</a></li>
				<li><a href="/gv-f?p=poi<?=count($parms) ? "&".join('&', $parms) : ""?>" class="signe-poi">Poissons</a></li>
			</ul>
		</nav>
		<script type="text/javascript" src="//cdn.jsdelivr.net/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"></script>
		<link href="//fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald" rel="stylesheet"/>
	</body>

</html>
