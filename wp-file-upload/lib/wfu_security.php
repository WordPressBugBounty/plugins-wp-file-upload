<?php

global $wfu_extension_blacklist;
global $wfu_dir_blacklist;
$wfu_extension_blacklist = array( "2clk" => 1, "386" => 1, "3dfbat" => 1, "3dm" => 1, "3dsx" => 1, "3rf" => 1, "4ge" => 1, "4gl" => 1, "4pk" => 1, "4th" => 1, "73i87A" => 1, "89x" => 1, "8xk" => 1, "8xp" => 1, "92x" => 1, "a" => 1, "a2w" => 1, "a2x" => 1, "a3c" => 1, "a3x" => 1, "a51" => 1, "a5r" => 1, "a5wcmp" => 1, "a66" => 1, "a6p" => 1, "a86" => 1, "a8s" => 1, "aaa" => 1, "aar" => 1, "aas" => 1, "abap" => 1, "abc" => 1, "abd" => 1, "abl" => 1, "abs" => 1, "ac" => 1, "acc" => 1, "accde" => 1, "acgi" => 1, "acm" => 1, "acr" => 1, "act" => 1, "action" => 1, "actionscript" => 1, "actproj" => 1, "actx" => 1, "acu" => 1, "acx" => 1, "ad" => 1, "ad2" => 1, "ada" => 1, "adb" => 1, "adba" => 1, "ade" => 1, "adiumscripts" => 1, "adp" => 1, "ads" => 1, "adt" => 1, "ae0" => 1, "aem" => 1, "aep" => 1, "aepl" => 1, "aex" => 1, "afb" => 1, "agc" => 1, "agi" => 1, "agls" => 1, "ago" => 1, "agp" => 1, "ags" => 1, "agt" => 1, "ahk" => 1, "ahtm" => 1, "ahtml" => 1, "aia" => 1, "aidl" => 1, "aif" => 1, "aifb" => 1, "air" => 1, "airi" => 1, "akp" => 1, "akt" => 1, "alan" => 1, "alb" => 1, "alg" => 1, "ali" => 1, "alm" => 1, "alx" => 1, "amf" => 1, "aml" => 1, "amos" => 1, "amw" => 1, "an" => 1, "ane" => 1, "anjuta" => 1, "anm" => 1, "ap" => 1, "apb" => 1, "apg" => 1, "api" => 1, "apifilters" => 1, "apk" => 1, "aplt" => 1, "apm" => 1, "app" => 1, "appcache" => 1, "applescript" => 1, "applet" => 1, "application" => 1, "apprefms" => 1, "appx" => 1, "appxmanifest" => 1, "appxsym" => 1, "appxupload" => 1, "aps" => 1, "apt" => 1, "aqf" => 1, "arb" => 1, "argo" => 1, "armx" => 1, "arnoldc" => 1, "aro" => 1, "arq" => 1, "arscript" => 1, "art" => 1, "artproj" => 1, "aru" => 1, "arxml" => 1, "ary" => 1, "as" => 1, "as3" => 1, "as4" => 1, "asa" => 1, "asax" => 1, "asbx" => 1, "asc" => 1, "ascx" => 1, "asgp" => 1, "ash" => 1, "ashx" => 1, "asi" => 1, "asic" => 1, "asis" => 1, "asm" => 1, "asmx" => 1, "aso" => 1, "asp" => 1, "asproj" => 1, "aspx" => 1, "asr" => 1, "ass" => 1, "asta" => 1, "astx" => 1, "asz" => 1, "ata" => 1, "atl" => 1, "atm" => 1, "atmn" => 1, "atom" => 1, "atomsvc" => 1, "atp" => 1, "ats" => 1, "au" => 1, "au3" => 1, "aus" => 1, "aut" => 1, "autoconf" => 1, "autoplay" => 1, "autosave" => 1, "avastconfig" => 1, "avb" => 1, "avc" => 1, "ave" => 1, "avs" => 1, "avsi" => 1, "awd" => 1, "awk" => 1, "awl" => 1, "awm" => 1, "awt" => 1, "axb" => 1, "axc" => 1, "axd" => 1, "axe" => 1, "axf" => 1, "axl" => 1, "axs" => 1, "azd" => 1, "azw2" => 1, "b" => 1, "b24" => 1, "b2d" => 1, "ba" => 1, "bal" => 1, "bas" => 1, "bash" => 1, "bat" => 1, "bau" => 1, "bax" => 1, "bb" => 1, "bbc" => 1, "bbe" => 1, "bbf" => 1, "bbproject" => 1, "bc" => 1, "bcc" => 1, "bcf" => 1, "bcp" => 1, "bcx" => 1, "bdh" => 1, "bdsproj" => 1, "bdt" => 1, "beam" => 1, "bed" => 1, "bet" => 1, "beta" => 1, "bfd" => 1, "bgi" => 1, "bgm" => 1, "bhs" => 1, "bhx" => 1, "bi" => 1, "bil" => 1, "bimd" => 1, "bin" => 1, "binarycookies" => 1, "bitcfg" => 1, "bitpim" => 1, "bkd" => 1, "bkmk" => 1, "bks" => 1, "blf" => 1, "bli" => 1, "bll" => 1, "bml" => 1, "bmml" => 1, "bmo" => 1, "bms" => 1, "bmw" => 1, "bochsrc" => 1, "bok" => 1, "boo" => 1, "bookexport" => 1, "bootstrap" => 1, "borland" => 1, "box" => 1, "bp" => 1, "bpk" => 1, "bpo" => 1, "bpp" => 1, "bpr" => 1, "bps" => 1, "bpt" => 1, "bqf" => 1, "breakingbad" => 1, "brg" => 1, "brml" => 1, "brs" => 1, "brx" => 1, "bs2" => 1, "bsc" => 1, "bsd" => 1, "bsh" => 1, "bsi" => 1, "bsl" => 1, "bsm" => 1, "bsml" => 1, "bson" => 1, "bsp" => 1, "bsv" => 1, "bt" => 1, "bt3" => 1, "btapp" => 1, "btc" => 1, "btf" => 1, "btm" => 1, "btproj" => 1, "btq" => 1, "btt" => 1, "btx" => 1, "bufferedimage" => 1, "build" => 1, "builder" => 1, "buildpath" => 1, "buk" => 1, "bup" => 1, "bur" => 1, "bus" => 1, "bwp" => 1, "bwz" => 1, "bxb" => 1, "bxl" => 1, "bxml" => 1, "bxp" => 1, "bxrc" => 1, "bxz" => 1, "bzs" => 1, "c" => 1, "c86" => 1, "ca" => 1, "cac" => 1, "cal" => 1, "cap" => 1, "capfile" => 1, "caps" => 1, "car" => 1, "cas" => 1, "cb" => 1, "cba" => 1, "cbl" => 1, "cbp" => 1, "cbq" => 1, "cbs" => 1, "cc" => 1, "ccb" => 1, "ccbjs" => 1, "ccc" => 1, "ccf" => 1, "ccfg" => 1, "cch" => 1, "ccp" => 1, "ccproj" => 1, "ccr" => 1, "ccs" => 1, "ccxml" => 1, "cd" => 1, "cdd" => 1, "cdf" => 1, "cdproj" => 1, "ce0" => 1, "ceid" => 1, "cel" => 1, "celx" => 1, "ceo" => 1, "cer" => 1, "cerber" => 1, "cert" => 1, "certauthorityconfig" => 1, "cezeokey" => 1, "cf" => 1, "cf3" => 1, "cfc" => 1, "cfg" => 1, "cfi" => 1, "cfm" => 1, "cfml" => 1, "cfo" => 1, "cfs" => 1, "cfxxe" => 1, "cg" => 1, "cgi" => 1, "cgvp" => 1, "cgx" => 1, "ch" => 1, "cha" => 1, "chat" => 1, "chd" => 1, "chef" => 1, "chf" => 1, "chh" => 1, "chl" => 1, "chtml" => 1, "cih" => 1, "ckm" => 1, "cl" => 1, "cla" => 1, "class" => 1, "classdiagram" => 1, "classpath" => 1, "cld" => 1, "clips" => 1, "clj" => 1, "clm" => 1, "clojure" => 1, "clp" => 1, "cls" => 1, "clu" => 1, "clw" => 1, "clx" => 1, "cm" => 1, "cma" => 1, "cmake" => 1, "cmd" => 1, "cml" => 1, "cmp" => 1, "cms" => 1, "cnf" => 1, "cnn" => 1, "cob" => 1, "cobol" => 1, "cod" => 1, "codasite" => 1, "coffee" => 1, "cola" => 1, "color" => 1, "com" => 1, "command" => 1, "common" => 1, "con" => 1, "conf" => 1, "confauto" => 1, "config" => 1, "configure" => 1, "confluence" => 1, "cook" => 1, "cord" => 1, "cos" => 1, "coverage" => 1, "coveragexml" => 1, "coverton" => 1, "cp" => 1, "cpb" => 1, "cpl" => 1, "cpp" => 1, "cpr" => 1, "cprr" => 1, "cpy" => 1, "cpz" => 1, "cq" => 1, "cql" => 1, "cr" => 1, "crdownload" => 1, "creole" => 1, "crinf" => 1, "crjoker" => 1, "crp" => 1, "crt" => 1, "cryp1" => 1, "crypt" => 1, "crypted" => 1, "cryptolocker" => 1, "cryptowall" => 1, "crypz" => 1, "cs" => 1, "csb" => 1, "csc" => 1, "cscfg" => 1, "cscpkt" => 1, "csd" => 1, "csf" => 1, "csgrad" => 1, "cshrc" => 1, "cshtml" => 1, "csi" => 1, "csm" => 1, "csml" => 1, "csp" => 1, "cspkg" => 1, "csproj" => 1, "csr" => 1, "css" => 1, "css1" => 1, "csview" => 1, "csx" => 1, "ctbl" => 1, "ctl" => 1, "ctp" => 1, "ctr" => 1, "ctt" => 1, "cu" => 1, "cuh" => 1, "cus" => 1, "cvsrc" => 1, "cwc" => 1, "cx" => 1, "cxe" => 1, "cxl" => 1, "cxp" => 1, "cxq" => 1, "cxs" => 1, "cxt" => 1, "cxx" => 1, "cya" => 1, "cyw" => 1, "czvxce" => 1, "d" => 1, "d2j" => 1, "d4" => 1, "da" => 1, "dadx" => 1, "daemonscript" => 1, "dap" => 1, "darkness" => 1, "das" => 1, "datasource" => 1, "db" => 1, "db2" => 1, "db2tbl" => 1, "db2tr" => 1, "db2vw" => 1, "dba" => 1, "dbc" => 1, "dbd" => 1, "dbg" => 1, "dbheader" => 1, "dbmdl" => 1, "dbmg" => 1, "dbml" => 1, "dbnx" => 1, "dbo" => 1, "dbp" => 1, "dbpro" => 1, "dbproj" => 1, "dbr" => 1, "dc" => 1, "dcb" => 1, "dcc" => 1, "dcd" => 1, "dcf" => 1, "dcfg" => 1, "dcr" => 1, "dctmp" => 1, "dd" => 1, "ddb" => 1, "ddp" => 1, "ddt" => 1, "deb" => 1, "defaultsite" => 1, "defi" => 1, "delf" => 1, "dep" => 1, "depend" => 1, "der" => 1, "derp" => 1, "des" => 1, "dev" => 1, "devicemetadatams" => 1, "devpak" => 1, "dex" => 1, "dexe" => 1, "dfb" => 1, "dfc" => 1, "dfd" => 1, "dfm" => 1, "dfn" => 1, "dg" => 1, "dgml" => 1, "dgscript" => 1, "dgsl" => 1, "dht" => 1, "dhtml" => 1, "di" => 1, "dia" => 1, "diagcfg" => 1, "dic" => 1, "dif" => 1, "diff" => 1, "dil" => 1, "dime" => 1, "din" => 1, "discomap" => 1, "dispositionnotification" => 1, "dita" => 1, "djg" => 1, "dks" => 1, "dlb" => 1, "dlc" => 1, "dlg" => 1, "dli" => 1, "dll" => 1, "dllx" => 1, "dmb" => 1, "dmc" => 1, "dml" => 1, "dms" => 1, "dno" => 1, "do" => 1, "dob" => 1, "dockerignore" => 1, "docstates" => 1, "dol" => 1, "dom" => 1, "dor" => 1, "download" => 1, "dpd" => 1, "dpj" => 1, "dpk" => 1, "dplt" => 1, "dpq" => 1, "dpr" => 1, "dpsml" => 1, "dqy" => 1, "drc" => 1, "drh" => 1, "dro" => 1, "dropbox" => 1, "drv" => 1, "ds" => 1, "dsa" => 1, "dsb" => 1, "dsd" => 1, "dse" => 1, "dso" => 1, "dsp" => 1, "dsq" => 1, "dsr" => 1, "dsym" => 1, "dt" => 1, "dtd" => 1, "dtml" => 1, "dto" => 1, "dtpc" => 1, "dts" => 1, "dtsconfig" => 1, "dtsearch" => 1, "dtx" => 1, "dun" => 1, "dvb" => 1, "dvp" => 1, "dwarf" => 1, "dwp" => 1, "dws" => 1, "dwt" => 1, "dx" => 1, "dxl" => 1, "dxz" => 1, "dyc" => 1, "dyv" => 1, "dyz" => 1, "e" => 1, "eaf" => 1, "ebc" => 1, "ebm" => 1, "ebs" => 1, "ebs2" => 1, "ebuild" => 1, "ebx" => 1, "ecc" => 1, "ece" => 1, "ecf" => 1, "ecore" => 1, "ecorediag" => 1, "ecu" => 1, "ed2k" => 1, "edml" => 1, "eek" => 1, "efss" => 1, "eg2" => 1, "egg" => 1, "egginfo" => 1, "eham" => 1, "ehi" => 1, "ejs" => 1, "ekm" => 1, "el" => 1, "elc" => 1, "eld" => 1, "elf" => 1, "email" => 1, "emakefile" => 1, "emakerfile" => 1, "eml" => 1, "emv" => 1, "EnCiPhErEd" => 1, "encrypt" => 1, "encrypted" => 1, "enigma" => 1, "enml" => 1, "ent" => 1, "entitlements" => 1, "epa" => 1, "epf" => 1, "ephtml" => 1, "epibrw" => 1, "epj" => 1, "epl" => 1, "epp" => 1, "ept" => 1, "eqconfig" => 1, "eql" => 1, "eqn" => 1, "erb" => 1, "erl" => 1, "erubis" => 1, "es" => 1, "esp" => 1, "esproj" => 1, "ev3p" => 1, "evm" => 1, "evp" => 1, "ew" => 1, "ewc" => 1, "ex" => 1, "exc" => 1, "exe" => 1, "exe1" => 1, "exe4j" => 1, "exec" => 1, "exerenamed" => 1, "exp" => 1, "exprwdconfig" => 1, "exprwdxsl" => 1, "exsd" => 1, "exu" => 1, "exv" => 1, "exw" => 1, "exx" => 1, "ezc" => 1, "eze" => 1, "ezhex" => 1, "ezt" => 1, "ezz" => 1, "f" => 1, "f03" => 1, "f40" => 1, "f77" => 1, "f90" => 1, "f95" => 1, "factorypath" => 1, "fag" => 1, "faq" => 1, "farrun" => 1, "fas" => 1, "fasl" => 1, "fbk" => 1, "fbp6" => 1, "fbz6" => 1, "fcg" => 1, "fcgi" => 1, "fdml" => 1, "fdp" => 1, "fdt" => 1, "feedms" => 1, "feedsdbms" => 1, "ff" => 1, "ffsbatch" => 1, "ffsgui" => 1, "ffsreal" => 1, "fgb" => 1, "fgl" => 1, "fhtml" => 1, "fhx" => 1, "fig" => 1, "fil" => 1, "fjl" => 1, "flm" => 1, "fmb" => 1, "fml" => 1, "fmp" => 1, "fmt" => 1, "fmx" => 1, "fnr" => 1, "folder" => 1, "for" => 1, "form" => 1, "forth" => 1, "fountain" => 1, "fox" => 1, "fp" => 1, "fpc" => 1, "fpi" => 1, "fpp" => 1, "fpsml" => 1, "fpweb" => 1, "fpx" => 1, "fpxml" => 1, "fqy" => 1, "frj" => 1, "frm" => 1, "frs" => 1, "frt" => 1, "fs" => 1, "fsb" => 1, "fsi" => 1, "fsproj" => 1, "fsscript" => 1, "fst" => 1, "fsx" => 1, "ftn" => 1, "ftp" => 1, "FTT" => 1, "fuj" => 1, "fun" => 1, "fus" => 1, "fwaction" => 1, "fwactionb" => 1, "fweb" => 1, "fwp" => 1, "fwt" => 1, "fwx" => 1, "fxc" => 1, "fxcproj" => 1, "fxl" => 1, "fxml" => 1, "fxp" => 1, "fzs" => 1, "g16" => 1, "g1m" => 1, "g3a" => 1, "gadgeprj" => 1, "gadget" => 1, "galaxy" => 1, "gambas" => 1, "gas" => 1, "gbap" => 1, "gbl" => 1, "gc3" => 1, "gch" => 1, "gcl" => 1, "gcode" => 1, "gdg" => 1, "gdm" => 1, "gdoc" => 1, "gdraw" => 1, "gdt" => 1, "geany" => 1, "gek" => 1, "gemfile" => 1, "gen" => 1, "generictest" => 1, "genmodel" => 1, "geojson" => 1, "getright" => 1, "gfa" => 1, "gfe" => 1, "gform" => 1, "gg" => 1, "ghc" => 1, "ghi" => 1, "ghp" => 1, "gim" => 1, "git" => 1, "gitconfig" => 1, "glade" => 1, "gladinetsp" => 1, "gld" => 1, "glf" => 1, "glink" => 1, "global" => 1, "gls" => 1, "gml" => 1, "gne" => 1, "gnt" => 1, "gnumakefile" => 1, "go" => 1, "gobj" => 1, "goc" => 1, "god" => 1, "good" => 1, "gp" => 1, "gpc" => 1, "gpe" => 1, "gpu" => 1, "gradle" => 1, "graphml" => 1, "graphmlz" => 1, "grd" => 1, "greenfoot" => 1, "groovy" => 1, "grx" => 1, "grxml" => 1, "gs" => 1, "gsb" => 1, "gsc" => 1, "gscript" => 1, "gsd" => 1, "gsheet" => 1, "gsk" => 1, "gslides" => 1, "gss" => 1, "gst" => 1, "gsym" => 1, "gtable" => 1, "gtp" => 1, "gup" => 1, "gus" => 1, "gv" => 1, "gvy" => 1, "gxl" => 1, "gyg" => 1, "gyp" => 1, "gypi" => 1, "gzquar" => 1, "h" => 1, "h2o" => 1, "h6h" => 1, "ha3" => 1, "hal" => 1, "haml" => 1, "handlebars" => 1, "has" => 1, "hathdl" => 1, "hay" => 1, "hbm" => 1, "hbs" => 1, "hbx" => 1, "hbz" => 1, "hc" => 1, "hcfg" => 1, "hcm" => 1, "hcr" => 1, "hcu" => 1, "hcw" => 1, "hdf" => 1, "hdl" => 1, "hdm" => 1, "hdml" => 1, "hei" => 1, "helpcfg" => 1, "herbst" => 1, "hexdwc" => 1, "hfc" => 1, "hfmx" => 1, "hh" => 1, "hhh" => 1, "hic" => 1, "hid" => 1, "history" => 1, "hkp" => 1, "hla" => 1, "hlp" => 1, "hlsl" => 1, "hlw" => 1, "hms" => 1, "hoic" => 1, "hom" => 1, "hot" => 1, "hp" => 1, "hpf" => 1, "hpj" => 1, "hpp" => 1, "hrh" => 1, "hrl" => 1, "hs" => 1, "hsc" => 1, "hsdl" => 1, "hse" => 1, "hsm" => 1, "hsq" => 1, "hsql" => 1, "ht" => 1, "ht4" => 1, "hta" => 1, "htaccess" => 1, "htc" => 1, "htd" => 1, "htm" => 1, "html" => 1, "html5" => 1, "htmls" => 1, "htms" => 1, "htpasswd" => 1, "htr" => 1, "hts" => 1, "htx" => 1, "hx" => 1, "hxa" => 1, "hxml" => 1, "hxp" => 1, "hxproj" => 1, "hxx" => 1, "hydra" => 1, "i" => 1, "ia" => 1, "iadaction" => 1, "iadclass" => 1, "iadpage" => 1, "iadstyle" => 1, "iaf" => 1, "iap" => 1, "ic" => 1, "ica" => 1, "ice" => 1, "icl" => 1, "icn" => 1, "iconfig" => 1, "icte" => 1, "idb" => 1, "ide" => 1, "idl" => 1, "idle" => 1, "ie3" => 1, "ifb" => 1, "ifp" => 1, "ifs" => 1, "ig" => 1, "igd" => 1, "ihtml" => 1, "ii" => 1, "iim" => 1, "iip" => 1, "ijc" => 1, "ijs" => 1, "ik" => 1, "il" => 1, "ilht" => 1, "ilk" => 1, "imap" => 1, "ime" => 1, "imh" => 1, "iml" => 1, "imp" => 1, "imported" => 1, "inc" => 1, "inf" => 1, "ini" => 1, "ini2" => 1, "ino" => 1, "inp" => 1, "ins" => 1, "install" => 1, "int" => 1, "inuse" => 1, "inz" => 1, "io" => 1, "iok" => 1, "iom" => 1, "ipb" => 1, "ipch" => 1, "ipf" => 1, "ipp" => 1, "ipproj" => 1, "ipr" => 1, "ips" => 1, "ipu" => 1, "ipy" => 1, "irafhosts" => 1, "irbrc" => 1, "irc" => 1, "irev" => 1, "irobo" => 1, "irx" => 1, "is" => 1, "isa" => 1, "isc" => 1, "ism" => 1, "isp" => 1, "iss" => 1, "isu" => 1, "isym" => 1, "itcl" => 1, "itmx" => 1, "its" => 1, "iva" => 1, "ivc" => 1, "ivp" => 1, "iws" => 1, "ix3" => 1, "ixx" => 1, "izs" => 1, "j" => 1, "j3d" => 1, "jacl" => 1, "jad" => 1, "jade" => 1, "jak" => 1, "jar" => 1, "jardesc" => 1, "jav" => 1, "java" => 1, "javajet" => 1, "jax" => 1, "jbi" => 1, "jbp" => 1, "jccfg3" => 1, "jcd" => 1, "jcf" => 1, "jcl" => 1, "jcm" => 1, "jcs" => 1, "jcw" => 1, "jcz" => 1, "jdc" => 1, "jdp" => 1, "jetinc" => 1, "jgc" => 1, "jgs" => 1, "jhtml" => 1, "jic" => 1, "jkm" => 1, "jks" => 1, "jl" => 1, "jlc" => 1, "jml" => 1, "jomproj" => 1, "joy" => 1, "jpage" => 1, "jpd" => 1, "js" => 1, "jsa" => 1, "jsb" => 1, "jsc" => 1, "jscript" => 1, "jsdtscope" => 1, "jse" => 1, "jsf" => 1, "jsfl" => 1, "jsh" => 1, "jsm" => 1, "jsobj" => 1, "json" => 1, "jsonp" => 1, "jsp" => 1, "jspa" => 1, "jspx" => 1, "jss" => 1, "jst" => 1, "jsx" => 1, "jsxbin" => 1, "jsxinc" => 1, "jtb" => 1, "jtg" => 1, "ju" => 1, "judo" => 1, "jvr" => 1, "jws" => 1, "kb" => 1, "kbs" => 1, "kcd" => 1, "kcf" => 1, "kcl" => 1, "kd" => 1, "kdevprj" => 1, "ked" => 1, "kernelcomplete" => 1, "kernelpid" => 1, "kerneltime" => 1, "kex" => 1, "keyboard" => 1, "keybtcinboxcom" => 1, "kgr" => 1, "kimcilware" => 1, "kismac" => 1, "kix" => 1, "kkk" => 1, "kl3" => 1, "kmd" => 1, "kmdi" => 1, "kml" => 1, "kmr" => 1, "kmt" => 1, "kodu" => 1, "komodo" => 1, "kon" => 1, "kpl" => 1, "kraken" => 1, "ks" => 1, "ksc" => 1, "ksh" => 1, "kst" => 1, "ktspack" => 1, "kumac" => 1, "kv" => 1, "l" => 1, "l1i" => 1, "lamp" => 1, "lap" => 1, "lasso" => 1, "launch" => 1, "lavs" => 1, "lay" => 1, "lbc" => 1, "lbi" => 1, "lbj" => 1, "lcc" => 1, "lct" => 1, "ld" => 1, "ldap" => 1, "ldmt" => 1, "lds" => 1, "ldz" => 1, "le" => 1, "leases" => 1, "LeChiffre" => 1, "les" => 1, "less" => 1, "let" => 1, "lex" => 1, "lgt" => 1, "lhs" => 1, "li" => 1, "lib" => 1, "licx" => 1, "lik" => 1, "link" => 1, "liquid" => 1, "lisp" => 1, "lit" => 1, "litcoffee" => 1, "lkh" => 1, "lku" => 1, "ll" => 1, "llf" => 1, "llp" => 1, "lml" => 1, "lmp" => 1, "lmv" => 1, "lng" => 1, "lnk" => 1, "lnp" => 1, "lnt" => 1, "lnx" => 1, "lo" => 1, "loc" => 1, "locked" => 1, "locky" => 1, "login" => 1, "lok" => 1, "lol" => 1, "lols" => 1, "lp" => 1, "lpaq5" => 1, "lpd" => 1, "lpr" => 1, "lpx" => 1, "lrf" => 1, "lrs" => 1, "ls1" => 1, "ls3proj" => 1, "lsh" => 1, "lsp" => 1, "lss" => 1, "lsx" => 1, "lsxtproj" => 1, "lua" => 1, "luac" => 1, "lub" => 1, "luca" => 1, "lwa" => 1, "lwac" => 1, "lwbm" => 1, "lwmw" => 1, "lwtt" => 1, "lxk" => 1, "lxsproj" => 1, "lzx" => 1, "m" => 1, "m2" => 1, "m2r" => 1, "m3" => 1, "m4" => 1, "m4x" => 1, "m51" => 1, "m6m" => 1, "mab" => 1, "mac" => 1, "mad" => 1, "maf" => 1, "mag" => 1, "magic" => 1, "magik" => 1, "magnet" => 1, "mai" => 1, "mak" => 1, "make" => 1, "maki" => 1, "mako" => 1, "mam" => 1, "maml" => 1, "map" => 1, "mapx" => 1, "maq" => 1, "mar" => 1, "mas" => 1, "mash" => 1, "master" => 1, "mat" => 1, "matlab" => 1, "mau" => 1, "mav" => 1, "maw" => 1, "mb" => 1, "mbam" => 1, "mbas" => 1, "mbs" => 1, "mbtemmplate" => 1, "mc" => 1, "mc6" => 1, "mca" => 1, "mcc" => 1, "mcd" => 1, "mcml" => 1, "mcp" => 1, "mcr" => 1, "mcserver" => 1, "mcw" => 1, "md" => 1, "mda" => 1, "mdb" => 1, "mde" => 1, "mdex" => 1, "mdf" => 1, "mdp" => 1, "mdrc" => 1, "mdt" => 1, "mdw" => 1, "mdz" => 1, "me" => 1, "mec" => 1, "mediawiki" => 1, "mel" => 1, "mem" => 1, "met" => 1, "meta4" => 1, "metadata" => 1, "metalink" => 1, "mew" => 1, "mex" => 1, "mexw32" => 1, "mf" => 1, "mfa" => 1, "mfcribbonms" => 1, "mfl" => 1, "mfps" => 1, "mfu" => 1, "mg" => 1, "mhc" => 1, "mhl" => 1, "mhtm" => 1, "mhtml" => 1, "mi" => 1, "mib" => 1, "micro" => 1, "mime" => 1, "mingw" => 1, "mingw32" => 1, "mix" => 1, "mjg" => 1, "mjk" => 1, "mjz" => 1, "mk" => 1, "mkb" => 1, "mke" => 1, "mky" => 1, "ml" => 1, "mli" => 1, "mln" => 1, "mls" => 1, "mlsxml" => 1, "mlv" => 1, "mlx" => 1, "mly" => 1, "mm" => 1, "mm3" => 1, "mm4" => 1, "mman" => 1, "mmb" => 1, "mmbas" => 1, "mmch" => 1, "mme" => 1, "mmf" => 1, "mmh" => 1, "mmjs" => 1, "mml" => 1, "mmrc" => 1, "mnd" => 1, "mo" => 1, "mobileconfig" => 1, "mobileprovision" => 1, "moc" => 1, "module" => 1, "mom" => 1, "moss" => 1, "mozconfig" => 1, "mp" => 1, "mpd" => 1, "mpkt" => 1, "mpm" => 1, "mpx" => 1, "mqt" => 1, "mrc" => 1, "mrd" => 1, "mrl" => 1, "mrs" => 1, "ms" => 1, "msc" => 1, "mscr" => 1, "msct" => 1, "msdev" => 1, "msdl" => 1, "msf" => 1, "msh" => 1, "msh1" => 1, "msh1xml" => 1, "msh2" => 1, "msh2xml" => 1, "msha" => 1, "mshxml" => 1, "msi" => 1, "msie" => 1, "msil" => 1, "msl" => 1, "msm" => 1, "mso" => 1, "msp" => 1, "mspl" => 1, "mspx" => 1, "msrcincident" => 1, "mss" => 1, "mst" => 1, "mstnef" => 1, "msvc" => 1, "msym" => 1, "mtml" => 1, "mtp" => 1, "mtx" => 1, "murl" => 1, "mvba" => 1, "mvc" => 1, "mvpl" => 1, "mw" => 1, "mwe" => 1, "mwp" => 1, "mx" => 1, "mxd" => 1, "mxe" => 1, "mxm" => 1, "mxml" => 1, "mxu" => 1, "myapp" => 1, "mzp" => 1, "napj" => 1, "nas" => 1, "nba" => 1, "nbin" => 1, "nbk" => 1, "nbo" => 1, "ncb" => 1, "ncc" => 1, "ncf" => 1, "ncfg" => 1, "nch" => 1, "nck" => 1, "ncm" => 1, "ncx" => 1, "nd" => 1, "ndr" => 1, "ne0" => 1, "neko" => 1, "nes" => 1, "net" => 1, "netboot" => 1, "netproject" => 1, "netsh" => 1, "newsloc" => 1, "nexe" => 1, "nfg" => 1, "ngage" => 1, "nhs" => 1, "nk" => 1, "nlc" => 1, "nlpj" => 1, "nls" => 1, "nmk" => 1, "nmpj" => 1, "nms" => 1, "nns" => 1, "nof" => 1, "nokogiri" => 1, "nopj" => 1, "npi" => 1, "nppj" => 1, "nqc" => 1, "nrs" => 1, "ns2p" => 1, "nsconfig" => 1, "nsd" => 1, "nse" => 1, "nsi" => 1, "nspj" => 1, "nsu" => 1, "nsx" => 1, "nt" => 1, "nunit" => 1, "nupkg" => 1, "nvi" => 1, "nxc" => 1, "nxe" => 1, "nxg" => 1, "nzb" => 1, "o" => 1, "oar" => 1, "oat" => 1, "obj" => 1, "obml" => 1, "obml15" => 1, "obml16" => 1, "obr" => 1, "ocamlmakefile" => 1, "ocb" => 1, "ocr" => 1, "ocx" => 1, "od" => 1, "odc" => 1, "odcodc" => 1, "odex" => 1, "odh" => 1, "odl" => 1, "ogl" => 1, "ognc" => 1, "ogr" => 1, "ogs" => 1, "ogx" => 1, "okm" => 1, "oks" => 1, "olt" => 1, "ook" => 1, "opdownload" => 1, "opf" => 1, "oplm" => 1, "opml" => 1, "oppo" => 1, "ops" => 1, "opt" => 1, "options" => 1, "opts" => 1, "opv" => 1, "opx" => 1, "oqy" => 1, "ora" => 1, "orc" => 1, "orl" => 1, "orq" => 1, "osa" => 1, "osas" => 1, "osax" => 1, "osd" => 1, "osg" => 1, "osx" => 1, "ovpn" => 1, "ow" => 1, "owd" => 1, "owl" => 1, "owm" => 1, "owx" => 1, "ox" => 1, "ozd" => 1, "p" => 1, "p5tkjw" => 1, "p7" => 1, "p7b" => 1, "p7c" => 1, "p7r" => 1, "p9d" => 1, "pac" => 1, "paf" => 1, "pag" => 1, "page" => 1, "pando" => 1, "par" => 1, "param" => 1, "parm" => 1, "part" => 1, "partial" => 1, "pas" => 1, "pat" => 1, "pawn" => 1, "paym" => 1, "paymrss" => 1, "payms" => 1, "paymst" => 1, "paymts" => 1, "payrms" => 1, "pays" => 1, "pb" => 1, "pb2" => 1, "pba" => 1, "pbi" => 1, "pbl" => 1, "pbp" => 1, "pbq" => 1, "pbx5script" => 1, "pbxbtree" => 1, "pbxproj" => 1, "pbxscript" => 1, "pc" => 1, "pc2" => 1, "pc3" => 1, "pcd" => 1, "pce" => 1, "pcf" => 1, "pch" => 1, "pcp" => 1, "pcs" => 1, "pd" => 1, "pdb" => 1, "pdcr" => 1, "pde" => 1, "pdk" => 1, "pdl" => 1, "pdml" => 1, "pdo" => 1, "pds" => 1, "pe" => 1, "pem" => 1, "perfmoncfg" => 1, "perl" => 1, "pf" => 1, "pf0" => 1, "pf1" => 1, "pf2" => 1, "pf4" => 1, "pfa" => 1, "pfc" => 1, "pfg" => 1, "pfx" => 1, "pgm" => 1, "pgml" => 1, "ph" => 1, "phar" => 1, "phl" => 1, "php" => 1, "php1" => 1, "php2" => 1, "php3" => 1, "php4" => 1, "php5" => 1, "php6" => 1, "phpproj" => 1, "phps" => 1, "phpt" => 1, "phs" => 1, "pht" => 1, "phtm" => 1, "phtml" => 1, "pickle" => 1, "pid" => 1, "pif" => 1, "pih" => 1, "pika" => 1, "pike" => 1, "pim" => 1, "pjt" => 1, "pjx" => 1, "pkb" => 1, "pkh" => 1, "pki" => 1, "pl" => 1, "pl1" => 1, "pl7" => 1, "plac" => 1, "playground" => 1, "plc" => 1, "plg" => 1, "pli" => 1, "pln" => 1, "plog" => 1, "pls" => 1, "pltcfg" => 1, "plx" => 1, "pm" => 1, "pmb" => 1, "pml" => 1, "pmod" => 1, "pmp" => 1, "pna" => 1, "pnagent" => 1, "pnc" => 1, "pnproj" => 1, "pnpt" => 1, "PoAr2w" => 1, "poc" => 1, "pod" => 1, "poix" => 1, "policy" => 1, "pom" => 1, "pou" => 1, "pp" => 1, "pp1" => 1, "ppa" => 1, "ppam" => 1, "ppml" => 1, "ppo" => 1, "ppp9" => 1, "ppz9" => 1, "pr" => 1, "pr7" => 1, "prb" => 1, "prc" => 1, "prf" => 1, "prg" => 1, "pri" => 1, "prl" => 1, "prm" => 1, "pro" => 1, "profiles" => 1, "properties" => 1, "propertiesjet" => 1, "proto" => 1, "proxy" => 1, "prp" => 1, "prt" => 1, "prx" => 1, "ps1" => 1, "ps1xml" => 1, "ps2" => 1, "ps2xml" => 1, "psc1" => 1, "psc2" => 1, "psd1" => 1, "psf" => 1, "psl" => 1, "psm1" => 1, "psml" => 1, "pspscript" => 1, "psu" => 1, "pt" => 1, "ptb" => 1, "ptg" => 1, "pti" => 1, "ptl" => 1, "ptx" => 1, "ptxml" => 1, "pubkr" => 1, "pui" => 1, "pun" => 1, "pva" => 1, "pvs" => 1, "pvx" => 1, "pwn" => 1, "pwo" => 1, "pwr" => 1, "pwz" => 1, "pxc" => 1, "pxd" => 1, "pxg" => 1, "pxi" => 1, "pxl" => 1, "pxml" => 1, "pxt" => 1, "py" => 1, "pyc" => 1, "pyd" => 1, "pym" => 1, "pyo" => 1, "pyt" => 1, "pyw" => 1, "pyx" => 1, "pyz" => 1, "pyzw" => 1, "pzdc" => 1, "qac" => 1, "qcf" => 1, "qdl" => 1, "qdr" => 1, "qf" => 1, "qit" => 1, "qlc" => 1, "qml" => 1, "qpkg" => 1, "qpr" => 1, "qpx" => 1, "qqq" => 1, "qrm" => 1, "qrn" => 1, "qry" => 1, "qs" => 1, "qsc" => 1, "qt3d" => 1, "qvs" => 1, "qvt" => 1, "qwc" => 1, "qx" => 1, "qxm" => 1, "r" => 1, "r5a" => 1, "radius" => 1, "rak" => 1, "rake" => 1, "rakefile" => 1, "rap" => 1, "rapc" => 1, "rat" => 1, "rb" => 1, "rbc" => 1, "rbf" => 1, "rbp" => 1, "rbs" => 1, "rbt" => 1, "rbtx" => 1, "rbvcp" => 1, "rbw" => 1, "rbx" => 1, "rc" => 1, "rc2" => 1, "rc3" => 1, "rcc" => 1, "rcf" => 1, "rcg" => 1, "rdf" => 1, "rdg" => 1, "rdm" => 1, "rdoc" => 1, "rdoff" => 1, "rdp" => 1, "re" => 1, "reb" => 1, "reg" => 1, "rej" => 1, "res" => 1, "resjson" => 1, "resourceconfig" => 1, "resources" => 1, "resx" => 1, "rex" => 1, "rexx" => 1, "rfs" => 1, "rfx" => 1, "rgs" => 1, "rguninst" => 1, "rh" => 1, "rhk" => 1, "rhs" => 1, "rhtml" => 1, "rip" => 1, "rjs" => 1, "rkt" => 1, "rmh" => 1, "rmi" => 1, "rml" => 1, "rmn" => 1, "rna" => 1, "rng" => 1, "rnk" => 1, "rnw" => 1, "rob" => 1, "robo" => 1, "rokku" => 1, "ror" => 1, "rpg" => 1, "rpj" => 1, "rpm" => 1, "rpo" => 1, "rpprj" => 1, "rpres" => 1, "rprofile" => 1, "rproj" => 1, "rptproj" => 1, "rpy" => 1, "rpyc" => 1, "rpym" => 1, "rqb" => 1, "rqy" => 1, "rrc" => 1, "rrh" => 1, "rrk" => 1, "rsctmp" => 1, "rsl" => 1, "rsm" => 1, "rsp" => 1, "rss" => 1, "rssc" => 1, "rsym" => 1, "rta" => 1, "rtk" => 1, "rtl" => 1, "rts" => 1, "rub" => 1, "rule" => 1, "run" => 1, "rvb" => 1, "rvp" => 1, "rvt" => 1, "rws" => 1, "rwsw" => 1, "rxe" => 1, "rxs" => 1, "ryb" => 1, "s" => 1, "s2a" => 1, "s2s" => 1, "s43" => 1, "s4e" => 1, "s5d" => 1, "s7p" => 1, "saas" => 1, "sal" => 1, "sam" => 1, "sami" => 1, "sap" => 1, "sar" => 1, "sas" => 1, "sasf" => 1, "sass" => 1, "saveddeck" => 1, "sax" => 1, "sb" => 1, "sbh" => 1, "sbi" => 1, "sbml" => 1, "sbr" => 1, "sbs" => 1, "sc" => 1, "sca" => 1, "scala" => 1, "scar" => 1, "scb" => 1, "scc" => 1, "scf" => 1, "sch" => 1, "scm" => 1, "sconscript" => 1, "sconstruct" => 1, "scp" => 1, "scpt" => 1, "scptd" => 1, "scr" => 1, "script" => 1, "scriptsuite" => 1, "scriptterminology" => 1, "scro" => 1, "scs" => 1, "scss" => 1, "sct" => 1, "scx" => 1, "scz" => 1, "sdb" => 1, "sdef" => 1, "sdg" => 1, "sdi" => 1, "sdl" => 1, "sdsb" => 1, "seam" => 1, "securedownload" => 1, "security" => 1, "seestyle" => 1, "self" => 1, "seman" => 1, "ser" => 1, "set" => 1, "settingcontentms" => 1, "sex" => 1, "sf" => 1, "sfl" => 1, "sflb" => 1, "sfm" => 1, "sfp" => 1, "sfr" => 1, "sfx" => 1, "sgc" => 1, "sh" => 1, "shb" => 1, "shfb" => 1, "shfbproj" => 1, "shit" => 1, "shs" => 1, "sht" => 1, "shtm" => 1, "shtml" => 1, "sid" => 1, "sim" => 1, "simba" => 1, "simple" => 1, "sis" => 1, "sisx" => 1, "sit" => 1, "sitemap" => 1, "siz" => 1, "sjava" => 1, "sjc" => 1, "sjs" => 1, "sk" => 1, "ska" => 1, "sko" => 1, "skp" => 1, "sl" => 1, "slackbuild" => 1, "slim" => 1, "sln" => 1, "slogo" => 1, "slogt" => 1, "slt" => 1, "sltng" => 1, "sm" => 1, "sma" => 1, "smali" => 1, "smd" => 1, "smi" => 1, "smil" => 1, "sml" => 1, "smm" => 1, "smtmp" => 1, "smw" => 1, "smx" => 1, "snapx" => 1, "snippet" => 1, "snm" => 1, "sno" => 1, "soc" => 1, "sol" => 1, "som" => 1, "sop" => 1, "sox" => 1, "sp" => 1, "spam" => 1, "spd" => 1, "spdesignconfig" => 1, "spdesignopen" => 1, "spdesignsitemap" => 1, "spk" => 1, "spm" => 1, "spml" => 1, "spr" => 1, "sps" => 1, "spt" => 1, "spx" => 1, "sqldataprovider" => 1, "sqljet" => 1, "sqlproj" => 1, "src" => 1, "srf" => 1, "srv" => 1, "srx" => 1, "srz" => 1, "ss" => 1, "ssage" => 1, "ssc" => 1, "sscs" => 1, "ssh" => 1, "ssi" => 1, "ssml" => 1, "ssq" => 1, "ssy" => 1, "st" => 1, "startlet" => 1, "status" => 1, "stl" => 1, "stm" => 1, "stml" => 1, "sts" => 1, "stuffit11task" => 1, "stx" => 1, "styl" => 1, "sublimeworkspace" => 1, "sup" => 1, "surprise" => 1, "sus" => 1, "svc" => 1, "svg" => 1, "svnbase" => 1, "svo" => 1, "svr" => 1, "svx" => 1, "svy" => 1, "sw" => 1, "swg" => 1, "swift" => 1, "swt" => 1, "swz" => 1, "sxp" => 1, "sxs" => 1, "sxt" => 1, "sxv" => 1, "sxx" => 1, "sym" => 1, "synwproj" => 1, "syp" => 1, "sys" => 1, "t" => 1, "t4" => 1, "tab" => 1, "tag" => 1, "tal" => 1, "targets" => 1, "tatxtt" => 1, "tbasic" => 1, "tbasicc" => 1, "tbasicx" => 1, "tbr" => 1, "tc" => 1, "tcl" => 1, "tcp" => 1, "tcsh" => 1, "tcz" => 1, "td" => 1, "td2" => 1, "tdo" => 1, "tds" => 1, "tdw" => 1, "tea" => 1, "tec" => 1, "tem" => 1, "texinfo" => 1, "textile" => 1, "tf" => 1, "tfa" => 1, "tgb" => 1, "tgml" => 1, "tgz" => 1, "thor" => 1, "thtml" => 1, "ti" => 1, "tig" => 1, "tik" => 1, "tikz" => 1, "tilemap" => 1, "tim" => 1, "tiprogram" => 1, "tk" => 1, "tko" => 1, "tkp" => 1, "tla" => 1, "tlc" => 1, "tld" => 1, "tlh" => 1, "tli" => 1, "tll" => 1, "tlv" => 1, "tm" => 1, "tmap" => 1, "tmh" => 1, "tml" => 1, "tmo" => 1, "tmp" => 1, "tokend" => 1, "top" => 1, "torrent" => 1, "tpm" => 1, "tpr" => 1, "tps" => 1, "tpsml" => 1, "tpt" => 1, "tpx" => 1, "tql" => 1, "tra" => 1, "tracwiki" => 1, "transcriptstyle" => 1, "triples" => 1, "trs" => 1, "trt" => 1, "tru" => 1, "ts0" => 1, "tsa" => 1, "tsc" => 1, "tsk" => 1, "tsm" => 1, "tsp" => 1, "tsq" => 1, "tst" => 1, "tstream" => 1, "ttcn" => 1, "tti" => 1, "ttinclude" => 1, "ttml" => 1, "ttt" => 1, "tu" => 1, "tur" => 1, "turboc3" => 1, "tvc" => 1, "tvpi" => 1, "tvvi" => 1, "twc" => 1, "twig" => 1, "txc" => 1, "txl" => 1, "txm" => 1, "txml" => 1, "txs" => 1, "txx" => 1, "tzs" => 1, "tzx" => 1, "uae" => 1, "ubb" => 1, "ubj" => 1, "ubr" => 1, "ucb" => 1, "ucf" => 1, "udf" => 1, "ufdl" => 1, "uhtml" => 1, "uih" => 1, "uit" => 1, "uix" => 1, "ulp" => 1, "umlclass" => 1, "ump" => 1, "und" => 1, "unx" => 1, "upa" => 1, "upl" => 1, "upload" => 1, "uri" => 1, "uris" => 1, "url" => 1, "urls" => 1, "usi" => 1, "usr" => 1, "uvoptx" => 1, "uvprjx" => 1, "uvproj" => 1, "uvprojx" => 1, "uzy" => 1, "v" => 1, "v3s" => 1, "v4e" => 1, "v4s" => 1, "vad" => 1, "vala" => 1, "vap" => 1, "var" => 1, "vb" => 1, "vba" => 1, "vbe" => 1, "vbg" => 1, "vbhtml" => 1, "vbi" => 1, "vbm" => 1, "vbp" => 1, "vbproj" => 1, "vbs" => 1, "vbscript" => 1, "vbw" => 1, "vbx" => 1, "vc" => 1, "vc1" => 1, "vc15" => 1, "vc2" => 1, "vc4" => 1, "vc5" => 1, "vc6" => 1, "vc7" => 1, "vce" => 1, "vcp" => 1, "vcproj" => 1, "vcwin32" => 1, "vcxproj" => 1, "vd" => 1, "vddproj" => 1, "vdm" => 1, "vdp" => 1, "vdproj" => 1, "vdw" => 1, "vexe" => 1, "vfb" => 1, "vgc" => 1, "vic" => 1, "vim" => 1, "vimrc" => 1, "vip" => 1, "viw" => 1, "vjp" => 1, "vjsproj" => 1, "vls" => 1, "vlx" => 1, "vmc" => 1, "vmsg" => 1, "vmx" => 1, "vnu" => 1, "vpc" => 1, "vpi" => 1, "vpl" => 1, "vpn" => 1, "vps" => 1, "vrf" => 1, "vrm" => 1, "vrml" => 1, "vrp" => 1, "vsc" => 1, "vscontent" => 1, "vsct" => 1, "vsdisco" => 1, "vsh" => 1, "vsixmanifest" => 1, "vsl" => 1, "vsmacros" => 1, "vspolicy" => 1, "vsprops" => 1, "vss" => 1, "vssscc" => 1, "vst" => 1, "vstemplate" => 1, "vsw" => 1, "vsy" => 1, "vtm" => 1, "vtml" => 1, "vue" => 1, "vup" => 1, "vv" => 1, "vxd" => 1, "vxml" => 1, "vzr" => 1, "w" => 1, "w32" => 1, "wadcfg" => 1, "wam" => 1, "war" => 1, "was" => 1, "wax" => 1, "wbc" => 1, "wbf" => 1, "wbl" => 1, "wbs" => 1, "wbt" => 1, "wbx" => 1, "wbxml" => 1, "wcf" => 1, "wch" => 1, "wcm" => 1, "wcr" => 1, "wda" => 1, "wdgt" => 1, "wdi" => 1, "wdk" => 1, "wdl" => 1, "wdproj" => 1, "wdw" => 1, "wdx9" => 1, "webarchivexml" => 1, "webbookmark" => 1, "webdoc" => 1, "webhistory" => 1, "webintents" => 1, "webloc" => 1, "webpnp" => 1, "webpublishhistory" => 1, "website" => 1, "webtest" => 1, "wed" => 1, "wfs" => 1, "wgt" => 1, "widget" => 1, "wie" => 1, "wiki" => 1, "wim" => 1, "win" => 1, "win32manifest" => 1, "wince" => 1, "windowslivegroup" => 1, "wis" => 1, "wix" => 1, "wixout" => 1, "wiz" => 1, "wli" => 1, "wlm" => 1, "wlpginstall" => 1, "wmc" => 1, "wmd" => 1, "wml" => 1, "wmlc" => 1, "wmls" => 1, "wmlsc" => 1, "wms" => 1, "wmw" => 1, "woa" => 1, "wod" => 1, "wowproj" => 1, "wpj" => 1, "wpk" => 1, "wpm" => 1, "ws" => 1, "wsc" => 1, "wsd" => 1, "wsdd" => 1, "wsdl" => 1, "wsf" => 1, "wsh" => 1, "wsil" => 1, "wsp" => 1, "wspd" => 1, "wsym" => 1, "wti" => 1, "wtk" => 1, "wwe" => 1, "wwt" => 1, "wx" => 1, "wxa" => 1, "wxi" => 1, "wxl" => 1, "wxs" => 1, "wys" => 1, "wzs" => 1, "x" => 1, "x4k" => 1, "x86" => 1, "xaml" => 1, "xamlx" => 1, "xap" => 1, "xbap" => 1, "xbc" => 1, "xbd" => 1, "xbl" => 1, "xblr" => 1, "xcl" => 1, "xcodeproj" => 1, "xcp" => 1, "xct" => 1, "xda" => 1, "xdfl" => 1, "xds" => 1, "xdu" => 1, "xex" => 1, "xfm" => 1, "xht" => 1, "xhtm" => 1, "xhtml" => 1, "xib" => 1, "xig" => 1, "xilize" => 1, "xin" => 1, "xip" => 1, "xir" => 1, "xjb" => 1, "xl" => 1, "xla" => 1, "xlm" => 1, "xlm3" => 1, "xlm4" => 1, "xlnk" => 1, "xlv" => 1, "xlx" => 1, "xmap" => 1, "xmc" => 1, "xme" => 1, "xml" => 1, "xmla" => 1, "xmljet" => 1, "xmllog" => 1, "xmsc" => 1, "xmss" => 1, "xmt" => 1, "xmta" => 1, "xn" => 1, "xnf" => 1, "xnk" => 1, "xnp" => 1, "xnt" => 1, "xnxx" => 1, "xojobinaryproject" => 1, "xojoproject" => 1, "xojoxmlproject" => 1, "xoml" => 1, "xpb" => 1, "xpd" => 1, "xpdl" => 1, "xpgt" => 1, "xpl" => 1, "xql" => 1, "xqr" => 1, "xr" => 1, "xrc" => 1, "xrds" => 1, "xsc" => 1, "xscscpt" => 1, "xsd" => 1, "xsl" => 1, "xslt" => 1, "xsql" => 1, "xtbl" => 1, "xtml" => 1, "xtx" => 1, "xtxt" => 1, "xui" => 1, "xul" => 1, "xweb3htm" => 1, "xweb4asax" => 1, "xweb4htt" => 1, "xweb4stm" => 1, "xxx" => 1, "xys" => 1, "xyz" => 1, "y" => 1, "yab" => 1, "yajl" => 1, "yaml" => 1, "yaws" => 1, "yml2" => 1, "ypf" => 1, "yt" => 1, "ywl" => 1, "yxx" => 1, "z" => 1, "zasm" => 1, "zbd" => 1, "zbi" => 1, "zc" => 1, "zcc" => 1, "zcfg" => 1, "zcls" => 1, "zcrypt" => 1, "zed" => 1, "zero" => 1, "zfd" => 1, "zfo" => 1, "zfrm" => 1, "zfs" => 1, "zhtml" => 1, "zhtw" => 1, "zit" => 1, "zix" => 1, "zms" => 1, "zpd" => 1, "zpk" => 1, "zpkg" => 1, "zpl" => 1, "zpweb" => 1, "zrx" => 1, "zs" => 1, "zsc" => 1, "zsh" => 1, "zsrc" => 1, "zts" => 1, "zul" => 1, "zup" => 1, "zvz" => 1, "zws" => 1, "zyklon" => 1, "zzb" => 1, "zzc" => 1, "zzd" => 1, "zze" => 1, "zzf" => 1, "zzk" => 1, "zzp" => 1, "zzt" => 1, "zzz" => 1 );

$wfu_dir_blacklist = array(
	defined("WP_PLUGIN_DIR") ? WP_PLUGIN_DIR : preg_replace("/^(.*?)(\/|\\\\)[^\/\\\\]*(\/|\\\\)$/", "$1", ABSWPFILEUPLOAD_DIR)
);

/**
 *  Checks if file extension is blacklisted
 *  
 *  This function will check if the extension of the file is included in the
 *  black list. If the filename contains more that one dot (.) characters the
 *  function will consider that it has more than one extensions. In this case it
 *  will check the last two ones (because in some web servers files like e.g.
 *  myfile.php.png are considered as php files and may be executed). If any of
 *  the extensions are included in the black list, then true will be returned.
 *  
 *  @param string $filename the filename of the uploaded file
 *  
 *  @return bool whether any of the file extensions is blacklisted or not
 */
function wfu_file_extension_blacklisted($filename) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	global $wfu_extension_blacklist;
	//extract and check extensions from filename
	$parts = explode(".", $filename);
	$exists = false;
	for ($i = count($parts) - 1; $i > max(0, count($parts) - 3); $i--) {
		$exists = isset($wfu_extension_blacklist[$parts[$i]]);
		if ( $exists ) break;
	}
	return $exists;
}

/**
 * Gets mime types of all extensions
 *  
 * This function returns the list of mime types of all extensions that have a
 * mime type. The list was retrieved from https://android.googlesource.com/platform/external/mime-support/+/9817b71a54a2ee8b691c1dfa937c0f9b16b3473c/mime.types
 *
 * @since 4.24.9
 *  
 * @return array An associative list of extensions' mime types.
 */
function wfu_extensions_mime_types() {
	$list = array( "ez" => array( "application/andrew-inset" ), "anx" => array( "application/annodex" ), "atom" => array( "application/atom+xml" ), "atomcat" => array( "application/atomcat+xml" ), "atomsrv" => array( "application/atomserv+xml" ), "lin" => array( "application/bbolin" ), "cu" => array( "application/cu-seeme" ), "davmount" => array( "application/davmount+xml" ), "dcm" => array( "application/dicom" ), "tsp" => array( "application/dsptype" ), "es" => array( "application/ecmascript" ), "epub" => array( "application/epub+zip" ), "otf" => array( "application/font-sfnt", "font/otf", "font/sfnt", "font/ttf" ), "ttf" => array( "application/font-sfnt", "font/otf", "font/sfnt", "font/ttf" ), "pfr" => array( "application/font-tdpfr" ), "woff" => array( "application/font-woff", "font/woff" ), "spl" => array( "application/futuresplash", "application/x-futuresplash" ), "gz" => array( "application/gzip" ), "hta" => array( "application/hta" ), "jar" => array( "application/java-archive" ), "ser" => array( "application/java-serialized-object" ), "class" => array( "application/java-vm" ), "js" => array( "application/javascript" ), "json" => array( "application/json" ), "m3g" => array( "application/m3g" ), "hqx" => array( "application/mac-binhex40" ), "cpt" => array( "application/mac-compactpro", "image/x-corelphotopaint" ), "nb" => array( "application/mathematica" ), "nbp" => array( "application/mathematica" ), "mbox" => array( "application/mbox" ), "mdb" => array( "application/msaccess" ), "doc" => array( "application/msword" ), "dot" => array( "application/msword" ), "mxf" => array( "application/mxf" ), "bin" => array( "application/octet-stream" ), "deploy" => array( "application/octet-stream" ), "msu" => array( "application/octet-stream" ), "msp" => array( "application/octet-stream" ), "oda" => array( "application/oda" ), "opf" => array( "application/oebps-package+xml" ), "ogx" => array( "application/ogg" ), "one" => array( "application/onenote" ), "onetoc2" => array( "application/onenote" ), "onetmp" => array( "application/onenote" ), "onepkg" => array( "application/onenote" ), "pdf" => array( "application/pdf" ), "pgp" => array( "application/pgp-encrypted" ), "key" => array( "application/pgp-keys" ), "sig" => array( "application/pgp-signature" ), "prf" => array( "application/pics-rules" ), "ps" => array( "application/postscript" ), "ai" => array( "application/postscript" ), "eps" => array( "application/postscript" ), "epsi" => array( "application/postscript" ), "epsf" => array( "application/postscript" ), "eps2" => array( "application/postscript" ), "eps3" => array( "application/postscript" ), "rar" => array( "application/rar", "application/x-rar" ), "rdf" => array( "application/rdf+xml" ), "rtf" => array( "application/rtf" ), "stl" => array( "application/sla" ), "smi" => array( "application/smil+xml" ), "smil" => array( "application/smil+xml" ), "xhtml" => array( "application/xhtml+xml" ), "xht" => array( "application/xhtml+xml" ), "xml" => array( "application/xml", "text/xml" ), "xsd" => array( "application/xml" ), "xsl" => array( "application/xslt+xml" ), "xslt" => array( "application/xslt+xml" ), "xspf" => array( "application/xspf+xml" ), "zip" => array( "application/zip" ), "apk" => array( "application/vnd.android.package-archive" ), "cdy" => array( "application/vnd.cinderella" ), "deb" => array( "application/vnd.debian.binary-package", "application/x-debian-package" ), "ddeb" => array( "application/vnd.debian.binary-package" ), "udeb" => array( "application/vnd.debian.binary-package", "application/x-debian-package" ), "sfd" => array( "application/vnd.font-fontforge-sfd" ), "kml" => array( "application/vnd.google-earth.kml+xml" ), "kmz" => array( "application/vnd.google-earth.kmz" ), "xul" => array( "application/vnd.mozilla.xul+xml" ), "xls" => array( "application/vnd.ms-excel" ), "xlb" => array( "application/vnd.ms-excel" ), "xlt" => array( "application/vnd.ms-excel" ), "xlam" => array( "application/vnd.ms-excel.addin.macroenabled.12" ), "xlsb" => array( "application/vnd.ms-excel.sheet.binary.macroenabled.12" ), "xlsm" => array( "application/vnd.ms-excel.sheet.macroenabled.12" ), "xltm" => array( "application/vnd.ms-excel.template.macroenabled.12" ), "eot" => array( "application/vnd.ms-fontobject" ), "thmx" => array( "application/vnd.ms-officetheme" ), "cat" => array( "application/vnd.ms-pki.seccat" ), "ppt" => array( "application/vnd.ms-powerpoint" ), "pps" => array( "application/vnd.ms-powerpoint" ), "ppam" => array( "application/vnd.ms-powerpoint.addin.macroenabled.12" ), "pptm" => array( "application/vnd.ms-powerpoint.presentation.macroenabled.12" ), "sldm" => array( "application/vnd.ms-powerpoint.slide.macroenabled.12" ), "ppsm" => array( "application/vnd.ms-powerpoint.slideshow.macroenabled.12" ), "potm" => array( "application/vnd.ms-powerpoint.template.macroenabled.12" ), "docm" => array( "application/vnd.ms-word.document.macroenabled.12" ), "dotm" => array( "application/vnd.ms-word.template.macroenabled.12" ), "odc" => array( "application/vnd.oasis.opendocument.chart" ), "odb" => array( "application/vnd.oasis.opendocument.database" ), "odf" => array( "application/vnd.oasis.opendocument.formula" ), "odg" => array( "application/vnd.oasis.opendocument.graphics" ), "otg" => array( "application/vnd.oasis.opendocument.graphics-template" ), "odi" => array( "application/vnd.oasis.opendocument.image" ), "odp" => array( "application/vnd.oasis.opendocument.presentation" ), "otp" => array( "application/vnd.oasis.opendocument.presentation-template" ), "ods" => array( "application/vnd.oasis.opendocument.spreadsheet" ), "ots" => array( "application/vnd.oasis.opendocument.spreadsheet-template" ), "odt" => array( "application/vnd.oasis.opendocument.text" ), "odm" => array( "application/vnd.oasis.opendocument.text-master" ), "ott" => array( "application/vnd.oasis.opendocument.text-template" ), "oth" => array( "application/vnd.oasis.opendocument.text-web" ), "pptx" => array( "application/vnd.openxmlformats-officedocument.presentationml.presentation" ), "sldx" => array( "application/vnd.openxmlformats-officedocument.presentationml.slide" ), "ppsx" => array( "application/vnd.openxmlformats-officedocument.presentationml.slideshow" ), "potx" => array( "application/vnd.openxmlformats-officedocument.presentationml.template" ), "xlsx" => array( "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" ), "xltx" => array( "application/vnd.openxmlformats-officedocument.spreadsheetml.template" ), "docx" => array( "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ), "dotx" => array( "application/vnd.openxmlformats-officedocument.wordprocessingml.template" ), "cod" => array( "application/vnd.rim.cod" ), "mmf" => array( "application/vnd.smaf" ), "sdc" => array( "application/vnd.stardivision.calc" ), "sds" => array( "application/vnd.stardivision.chart" ), "sda" => array( "application/vnd.stardivision.draw" ), "sdd" => array( "application/vnd.stardivision.impress" ), "sdf" => array( "application/vnd.stardivision.math", "chemical/x-mdl-sdfile" ), "sdw" => array( "application/vnd.stardivision.writer" ), "sgl" => array( "application/vnd.stardivision.writer-global" ), "sxc" => array( "application/vnd.sun.xml.calc" ), "stc" => array( "application/vnd.sun.xml.calc.template" ), "sxd" => array( "application/vnd.sun.xml.draw" ), "std" => array( "application/vnd.sun.xml.draw.template" ), "sxi" => array( "application/vnd.sun.xml.impress" ), "sti" => array( "application/vnd.sun.xml.impress.template" ), "sxm" => array( "application/vnd.sun.xml.math" ), "sxw" => array( "application/vnd.sun.xml.writer" ), "sxg" => array( "application/vnd.sun.xml.writer.global" ), "stw" => array( "application/vnd.sun.xml.writer.template" ), "sis" => array( "application/vnd.symbian.install" ), "cap" => array( "application/vnd.tcpdump.pcap" ), "pcap" => array( "application/vnd.tcpdump.pcap" ), "vsd" => array( "application/vnd.visio" ), "vst" => array( "application/vnd.visio" ), "vsw" => array( "application/vnd.visio" ), "vss" => array( "application/vnd.visio" ), "wbxml" => array( "application/vnd.wap.wbxml" ), "wmlc" => array( "application/vnd.wap.wmlc" ), "wmlsc" => array( "application/vnd.wap.wmlscriptc" ), "wpd" => array( "application/vnd.wordperfect" ), "wp5" => array( "application/vnd.wordperfect5.1" ), "wk" => array( "application/x-123" ), "7z" => array( "application/x-7z-compressed" ), "abw" => array( "application/x-abiword" ), "dmg" => array( "application/x-apple-diskimage" ), "bcpio" => array( "application/x-bcpio" ), "torrent" => array( "application/x-bittorrent" ), "cab" => array( "application/x-cab" ), "cbr" => array( "application/x-cbr" ), "cbz" => array( "application/x-cbz" ), "cdf" => array( "application/x-cdf" ), "cda" => array( "application/x-cdf" ), "vcd" => array( "application/x-cdlink" ), "pgn" => array( "application/x-chess-pgn" ), "mph" => array( "application/x-comsol" ), "cpio" => array( "application/x-cpio" ), "csh" => array( "application/x-csh", "text/x-csh" ), "dcr" => array( "application/x-director" ), "dir" => array( "application/x-director" ), "dxr" => array( "application/x-director" ), "dms" => array( "application/x-dms" ), "wad" => array( "application/x-doom" ), "dvi" => array( "application/x-dvi" ), "pfa" => array( "application/x-font" ), "pfb" => array( "application/x-font" ), "gsf" => array( "application/x-font" ), "pcf" => array( "application/x-font-pcf" ), "pcf.z" => array( "application/x-font-pcf" ), "mm" => array( "application/x-freemind" ), "gan" => array( "application/x-ganttproject" ), "gnumeric" => array( "application/x-gnumeric" ), "sgf" => array( "application/x-go-sgf" ), "gcf" => array( "application/x-graphing-calculator" ), "gtar" => array( "application/x-gtar" ), "tgz" => array( "application/x-gtar-compressed" ), "taz" => array( "application/x-gtar-compressed" ), "hdf" => array( "application/x-hdf" ), "hwp" => array( "application/x-hwp" ), "ica" => array( "application/x-ica" ), "info" => array( "application/x-info" ), "ins" => array( "application/x-internet-signup" ), "isp" => array( "application/x-internet-signup" ), "iii" => array( "application/x-iphone" ), "iso" => array( "application/x-iso9660-image" ), "jam" => array( "application/x-jam" ), "jnlp" => array( "application/x-java-jnlp-file" ), "jmz" => array( "application/x-jmol" ), "chrt" => array( "application/x-kchart" ), "kil" => array( "application/x-killustrator" ), "skp" => array( "application/x-koan" ), "skd" => array( "application/x-koan" ), "skt" => array( "application/x-koan" ), "skm" => array( "application/x-koan" ), "kpr" => array( "application/x-kpresenter" ), "kpt" => array( "application/x-kpresenter" ), "ksp" => array( "application/x-kspread" ), "kwd" => array( "application/x-kword" ), "kwt" => array( "application/x-kword" ), "latex" => array( "application/x-latex" ), "lha" => array( "application/x-lha" ), "lyx" => array( "application/x-lyx" ), "lzh" => array( "application/x-lzh" ), "lzx" => array( "application/x-lzx" ), "frm" => array( "application/x-maker" ), "maker" => array( "application/x-maker" ), "frame" => array( "application/x-maker" ), "fm" => array( "application/x-maker" ), "fb" => array( "application/x-maker" ), "book" => array( "application/x-maker" ), "fbdoc" => array( "application/x-maker" ), "mif" => array( "application/x-mif" ), "m3u8" => array( "application/x-mpegurl" ), "application" => array( "application/x-ms-application" ), "manifest" => array( "application/x-ms-manifest" ), "wmd" => array( "application/x-ms-wmd" ), "wmz" => array( "application/x-ms-wmz" ), "com" => array( "application/x-msdos-program" ), "exe" => array( "application/x-msdos-program" ), "bat" => array( "application/x-msdos-program" ), "dll" => array( "application/x-msdos-program" ), "msi" => array( "application/x-msi" ), "nc" => array( "application/x-netcdf" ), "pac" => array( "application/x-ns-proxy-autoconfig" ), "nwc" => array( "application/x-nwc" ), "o" => array( "application/x-object" ), "oza" => array( "application/x-oz-application" ), "p7r" => array( "application/x-pkcs7-certreqresp" ), "crl" => array( "application/x-pkcs7-crl" ), "pyc" => array( "application/x-python-code" ), "pyo" => array( "application/x-python-code" ), "qgs" => array( "application/x-qgis" ), "shp" => array( "application/x-qgis" ), "shx" => array( "application/x-qgis" ), "qtl" => array( "application/x-quicktimeplayer" ), "rdp" => array( "application/x-rdp" ), "rpm" => array( "application/x-redhat-package-manager" ), "rss" => array( "application/x-rss+xml" ), "rb" => array( "application/x-ruby" ), "sci" => array( "application/x-scilab" ), "sce" => array( "application/x-scilab" ), "xcos" => array( "application/x-scilab-xcos" ), "sh" => array( "application/x-sh", "text/x-sh" ), "shar" => array( "application/x-shar" ), "swf" => array( "application/x-shockwave-flash" ), "swfl" => array( "application/x-shockwave-flash" ), "scr" => array( "application/x-silverlight" ), "sql" => array( "application/x-sql" ), "sit" => array( "application/x-stuffit" ), "sitx" => array( "application/x-stuffit" ), "sv4cpio" => array( "application/x-sv4cpio" ), "sv4crc" => array( "application/x-sv4crc" ), "tar" => array( "application/x-tar" ), "tcl" => array( "application/x-tcl", "text/x-tcl" ), "gf" => array( "application/x-tex-gf" ), "pk" => array( "application/x-tex-pk" ), "texinfo" => array( "application/x-texinfo" ), "texi" => array( "application/x-texinfo" ), "~" => array( "application/x-trash" ), "%" => array( "application/x-trash" ), "bak" => array( "application/x-trash" ), "old" => array( "application/x-trash" ), "sik" => array( "application/x-trash" ), "t" => array( "application/x-troff" ), "tr" => array( "application/x-troff" ), "roff" => array( "application/x-troff" ), "man" => array( "application/x-troff-man" ), "me" => array( "application/x-troff-me" ), "ms" => array( "application/x-troff-ms" ), "ustar" => array( "application/x-ustar" ), "src" => array( "application/x-wais-source" ), "wz" => array( "application/x-wingz" ), "crt" => array( "application/x-x509-ca-cert" ), "xcf" => array( "application/x-xcf" ), "fig" => array( "application/x-xfig" ), "xpi" => array( "application/x-xpinstall" ), "xz" => array( "application/x-xz" ), "amr" => array( "audio/amr" ), "awb" => array( "audio/amr-wb" ), "axa" => array( "audio/annodex" ), "au" => array( "audio/basic" ), "snd" => array( "audio/basic" ), "csd" => array( "audio/csound" ), "orc" => array( "audio/csound" ), "sco" => array( "audio/csound" ), "flac" => array( "audio/flac" ), "mid" => array( "audio/midi" ), "midi" => array( "audio/midi" ), "kar" => array( "audio/midi" ), "mpga" => array( "audio/mpeg" ), "mpega" => array( "audio/mpeg" ), "mp2" => array( "audio/mpeg" ), "mp3" => array( "audio/mpeg" ), "m4a" => array( "audio/mpeg", "audio/x-m4a" ), "m3u" => array( "audio/mpegurl", "audio/x-mpegurl" ), "oga" => array( "audio/ogg" ), "ogg" => array( "audio/ogg" ), "opus" => array( "audio/ogg" ), "spx" => array( "audio/ogg" ), "sid" => array( "audio/prs.sid" ), "aif" => array( "audio/x-aiff" ), "aiff" => array( "audio/x-aiff" ), "aifc" => array( "audio/x-aiff" ), "gsm" => array( "audio/x-gsm" ), "wma" => array( "audio/x-ms-wma" ), "wax" => array( "audio/x-ms-wax" ), "ra" => array( "audio/x-pn-realaudio", "audio/x-realaudio" ), "rm" => array( "audio/x-pn-realaudio" ), "ram" => array( "audio/x-pn-realaudio" ), "pls" => array( "audio/x-scpls" ), "sd2" => array( "audio/x-sd2" ), "wav" => array( "audio/x-wav" ), "alc" => array( "chemical/x-alchemy" ), "cac" => array( "chemical/x-cache" ), "cache" => array( "chemical/x-cache" ), "csf" => array( "chemical/x-cache-csf" ), "cbin" => array( "chemical/x-cactvs-binary" ), "cascii" => array( "chemical/x-cactvs-binary" ), "ctab" => array( "chemical/x-cactvs-binary" ), "cdx" => array( "chemical/x-cdx" ), "cer" => array( "chemical/x-cerius" ), "c3d" => array( "chemical/x-chem3d" ), "chm" => array( "chemical/x-chemdraw" ), "cif" => array( "chemical/x-cif" ), "cmdf" => array( "chemical/x-cmdf" ), "cml" => array( "chemical/x-cml" ), "cpa" => array( "chemical/x-compass" ), "bsd" => array( "chemical/x-crossfire" ), "csml" => array( "chemical/x-csml" ), "csm" => array( "chemical/x-csml" ), "ctx" => array( "chemical/x-ctx" ), "cxf" => array( "chemical/x-cxf" ), "cef" => array( "chemical/x-cxf" ), "emb" => array( "chemical/x-embl-dl-nucleotide" ), "embl" => array( "chemical/x-embl-dl-nucleotide" ), "spc" => array( "chemical/x-galactic-spc" ), "inp" => array( "chemical/x-gamess-input" ), "gam" => array( "chemical/x-gamess-input" ), "gamin" => array( "chemical/x-gamess-input" ), "fch" => array( "chemical/x-gaussian-checkpoint" ), "fchk" => array( "chemical/x-gaussian-checkpoint" ), "cub" => array( "chemical/x-gaussian-cube" ), "gau" => array( "chemical/x-gaussian-input" ), "gjc" => array( "chemical/x-gaussian-input" ), "gjf" => array( "chemical/x-gaussian-input" ), "gal" => array( "chemical/x-gaussian-log" ), "gcg" => array( "chemical/x-gcg8-sequence" ), "gen" => array( "chemical/x-genbank" ), "hin" => array( "chemical/x-hin" ), "istr" => array( "chemical/x-isostar" ), "ist" => array( "chemical/x-isostar" ), "jdx" => array( "chemical/x-jcamp-dx" ), "dx" => array( "chemical/x-jcamp-dx" ), "kin" => array( "chemical/x-kinemage" ), "mcm" => array( "chemical/x-macmolecule" ), "mmd" => array( "chemical/x-macromodel-input" ), "mmod" => array( "chemical/x-macromodel-input" ), "mol" => array( "chemical/x-mdl-molfile" ), "rd" => array( "chemical/x-mdl-rdfile" ), "rxn" => array( "chemical/x-mdl-rxnfile" ), "sd" => array( "chemical/x-mdl-sdfile" ), "tgf" => array( "chemical/x-mdl-tgf" ), "mcif" => array( "chemical/x-mmcif" ), "mol2" => array( "chemical/x-mol2" ), "b" => array( "chemical/x-molconn-z" ), "gpt" => array( "chemical/x-mopac-graph" ), "mop" => array( "chemical/x-mopac-input" ), "mopcrt" => array( "chemical/x-mopac-input" ), "mpc" => array( "chemical/x-mopac-input" ), "zmt" => array( "chemical/x-mopac-input" ), "moo" => array( "chemical/x-mopac-out" ), "mvb" => array( "chemical/x-mopac-vib" ), "asn" => array( "chemical/x-ncbi-asn1", "chemical/x-ncbi-asn1-spec" ), "prt" => array( "chemical/x-ncbi-asn1-ascii" ), "ent" => array( "chemical/x-ncbi-asn1-ascii", "chemical/x-pdb" ), "val" => array( "chemical/x-ncbi-asn1-binary" ), "aso" => array( "chemical/x-ncbi-asn1-binary" ), "pdb" => array( "chemical/x-pdb" ), "ros" => array( "chemical/x-rosdal" ), "sw" => array( "chemical/x-swissprot" ), "vms" => array( "chemical/x-vamas-iso14976" ), "vmd" => array( "chemical/x-vmd" ), "xtel" => array( "chemical/x-xtel" ), "xyz" => array( "chemical/x-xyz" ), "ttc" => array( "font/collection" ), "woff2" => array( "font/woff2" ), "gif" => array( "image/gif" ), "ief" => array( "image/ief" ), "jp2" => array( "image/jp2" ), "jpg2" => array( "image/jp2" ), "jpeg" => array( "image/jpeg" ), "jpg" => array( "image/jpeg" ), "jpe" => array( "image/jpeg" ), "jpm" => array( "image/jpm" ), "jpx" => array( "image/jpx" ), "jpf" => array( "image/jpx" ), "pcx" => array( "image/pcx" ), "png" => array( "image/png" ), "svg" => array( "image/svg+xml" ), "svgz" => array( "image/svg+xml" ), "tiff" => array( "image/tiff" ), "tif" => array( "image/tiff" ), "djvu" => array( "image/vnd.djvu" ), "djv" => array( "image/vnd.djvu" ), "ico" => array( "image/vnd.microsoft.icon" ), "wbmp" => array( "image/vnd.wap.wbmp" ), "cr2" => array( "image/x-canon-cr2" ), "crw" => array( "image/x-canon-crw" ), "ras" => array( "image/x-cmu-raster" ), "cdr" => array( "image/x-coreldraw" ), "pat" => array( "image/x-coreldrawpattern" ), "cdt" => array( "image/x-coreldrawtemplate" ), "erf" => array( "image/x-epson-erf" ), "art" => array( "image/x-jg" ), "jng" => array( "image/x-jng" ), "bmp" => array( "image/x-ms-bmp" ), "nef" => array( "image/x-nikon-nef" ), "orf" => array( "image/x-olympus-orf" ), "psd" => array( "image/x-photoshop" ), "pnm" => array( "image/x-portable-anymap" ), "pbm" => array( "image/x-portable-bitmap" ), "pgm" => array( "image/x-portable-graymap" ), "ppm" => array( "image/x-portable-pixmap" ), "rgb" => array( "image/x-rgb" ), "xbm" => array( "image/x-xbitmap" ), "xpm" => array( "image/x-xpixmap" ), "xwd" => array( "image/x-xwindowdump" ), "eml" => array( "message/rfc822" ), "igs" => array( "model/iges" ), "iges" => array( "model/iges" ), "msh" => array( "model/mesh" ), "mesh" => array( "model/mesh" ), "silo" => array( "model/mesh" ), "wrl" => array( "model/vrml", "x-world/x-vrml" ), "vrml" => array( "model/vrml", "x-world/x-vrml" ), "x3dv" => array( "model/x3d+vrml" ), "x3d" => array( "model/x3d+xml" ), "x3db" => array( "model/x3d+binary" ), "appcache" => array( "text/cache-manifest" ), "ics" => array( "text/calendar" ), "icz" => array( "text/calendar" ), "css" => array( "text/css" ), "csv" => array( "text/csv", "text/plain" ), "323" => array( "text/h323" ), "html" => array( "text/html" ), "htm" => array( "text/html" ), "shtml" => array( "text/html" ), "uls" => array( "text/iuls" ), "mml" => array( "text/mathml" ), "md" => array( "text/markdown" ), "markdown" => array( "text/markdown" ), "asc" => array( "text/plain" ), "txt" => array( "text/plain" ), "text" => array( "text/plain" ), "pot" => array( "text/plain" ), "brf" => array( "text/plain" ), "srt" => array( "text/plain" ), "rtx" => array( "text/richtext" ), "sct" => array( "text/scriptlet" ), "wsc" => array( "text/scriptlet" ), "tm" => array( "text/texmacs" ), "tsv" => array( "text/tab-separated-values" ), "ttl" => array( "text/turtle" ), "vcf" => array( "text/vcard" ), "vcard" => array( "text/vcard" ), "jad" => array( "text/vnd.sun.j2me.app-descriptor" ), "wml" => array( "text/vnd.wap.wml" ), "wmls" => array( "text/vnd.wap.wmlscript" ), "bib" => array( "text/x-bibtex" ), "boo" => array( "text/x-boo" ), "h++" => array( "text/x-c++hdr" ), "hpp" => array( "text/x-c++hdr" ), "hxx" => array( "text/x-c++hdr" ), "hh" => array( "text/x-c++hdr" ), "c++" => array( "text/x-c++src" ), "cpp" => array( "text/x-c++src" ), "cxx" => array( "text/x-c++src" ), "cc" => array( "text/x-c++src" ), "h" => array( "text/x-chdr" ), "htc" => array( "text/x-component" ), "c" => array( "text/x-csrc" ), "d" => array( "text/x-dsrc" ), "diff" => array( "text/x-diff" ), "patch" => array( "text/x-diff" ), "hs" => array( "text/x-haskell" ), "java" => array( "text/x-java" ), "ly" => array( "text/x-lilypond" ), "lhs" => array( "text/x-literate-haskell" ), "moc" => array( "text/x-moc" ), "p" => array( "text/x-pascal" ), "pas" => array( "text/x-pascal" ), "gcd" => array( "text/x-pcs-gcd" ), "pl" => array( "text/x-perl" ), "pm" => array( "text/x-perl" ), "py" => array( "text/x-python" ), "scala" => array( "text/x-scala" ), "etx" => array( "text/x-setext" ), "sfv" => array( "text/x-sfv" ), "tk" => array( "text/x-tcl" ), "tex" => array( "text/x-tex" ), "ltx" => array( "text/x-tex" ), "sty" => array( "text/x-tex" ), "cls" => array( "text/x-tex" ), "vcs" => array( "text/x-vcalendar" ), "3gp" => array( "video/3gpp" ), "axv" => array( "video/annodex" ), "dl" => array( "video/dl" ), "dif" => array( "video/dv" ), "dv" => array( "video/dv" ), "fli" => array( "video/fli" ), "gl" => array( "video/gl" ), "mpeg" => array( "video/mpeg" ), "mpg" => array( "video/mpeg" ), "mpe" => array( "video/mpeg" ), "ts" => array( "video/mp2t" ), "mp4" => array( "video/mp4" ), "qt" => array( "video/quicktime" ), "mov" => array( "video/quicktime" ), "ogv" => array( "video/ogg" ), "webm" => array( "video/webm" ), "mxu" => array( "video/vnd.mpegurl" ), "flv" => array( "video/x-flv" ), "lsf" => array( "video/x-la-asf" ), "lsx" => array( "video/x-la-asf" ), "mng" => array( "video/x-mng" ), "asf" => array( "video/x-ms-asf" ), "asx" => array( "video/x-ms-asf" ), "wm" => array( "video/x-ms-wm" ), "wmv" => array( "video/x-ms-wmv" ), "wmx" => array( "video/x-ms-wmx" ), "wvx" => array( "video/x-ms-wvx" ), "avi" => array( "video/x-msvideo" ), "movie" => array( "video/x-sgi-movie" ), "mpv" => array( "video/x-matroska" ), "mkv" => array( "video/x-matroska" ), "ice" => array( "x-conference/x-cooltalk" ), "sisx" => array( "x-epoc/x-sisx-app" ), "vrm" => array( "x-world/x-vrml" ) );
	
	/**
	 * Customize List of Extensions' Mime Types.
	 *
	 * This filter allows custom actions to modify the list of extensions' mime
	 * types.
	 *
	 * @since 4.24.9
	 *
	 * @param array $list An array of extensions' mime types.
	 */
	$list = apply_filters( "_wfu_extensions_mime_types", $list );
	
	return $list;
}

/**
 *  Checks if file extension is whitelisted
 *  
 *  This function will check if the extension of the file is included in the
 *  white list. It will check only the last extension of the file.
 *  
 *  @param string $filename the filename of the uploaded file
 *  
 *  @return bool whether the file extension is whitelisted or not
 *  
 *  @details Details
 */
function wfu_file_extension_whitelisted($filename) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	//$whitelist = array( "1st" => 1, "264" => 1, "3g2" => 1, "3ga" => 1, "3gp" => 1, "aac" => 1, "abw" => 1, "ai" => 1, "aiff" => 1, "amr" => 1, "ape" => 1, "arf" => 1, "asf" => 1, "asx" => 1, "avi" => 1, "aww" => 1, "bik" => 1, "bmp" => 1, "cda" => 1, "cdr" => 1, "csv" => 1, "dash" => 1, "dat" => 1, "dds" => 1, "dib" => 1, "djvu" => 1, "dng" => 1, "doc" => 1, "docx" => 1, "drw" => 1, "dt2" => 1, "dvf" => 1, "dvr" => 1, "emf" => 1, "emz" => 1, "eng" => 1, "epub" => 1, "file" => 1, "flac" => 1, "gif" => 1, "gp4" => 1, "gp5" => 1, "gpx" => 1, "h264" => 1, "ind" => 1, "indd" => 1, "jpeg" => 1, "jpg" => 1, "key" => 1, "log" => 1, "logic" => 1, "lrc" => 1, "m2t" => 1, "m2ts" => 1, "m4a" => 1, "m4b" => 1, "m4p" => 1, "m4v" => 1, "midi" => 1, "mkv" => 1, "mov" => 1, "mp3" => 1, "mp4" => 1, "mpeg" => 1, "mpg" => 1, "mpp" => 1, "mpt" => 1, "mts" => 1, "nfo" => 1, "odf" => 1, "odg" => 1, "ods" => 1, "odt" => 1, "ogg" => 1, "ogv" => 1, "ott" => 1, "oxps" => 1, "pages" => 1, "pcm" => 1, "pdf" => 1, "pic" => 1, "plist" => 1, "pmd" => 1, "png" => 1, "pot" => 1, "potx" => 1, "pps" => 1, "ppsx" => 1, "ppt" => 1, "pptx" => 1, "prn" => 1, "ps" => 1, "psd" => 1, "psdx" => 1, "pts" => 1, "pub" => 1, "pwi" => 1, "raw" => 1, "rec" => 1, "rep" => 1, "rmvb" => 1, "rtf" => 1, "sdd" => 1, "sdw" => 1, "snd" => 1, "sng" => 1, "snp" => 1, "sub" => 1, "sxw" => 1, "tbl" => 1, "tga" => 1, "tif" => 1, "tiff" => 1, "tod" => 1, "tp" => 1, "ts" => 1, "txt" => 1, "uax" => 1, "vob" => 1, "vsd" => 1, "wav" => 1, "wbmp" => 1, "wdp" => 1, "wlmp" => 1, "wma" => 1, "wmv" => 1, "wpd" => 1, "wpl" => 1, "wps" => 1, "wri" => 1, "xls" => 1, "xlsx" => 1, "xps" => 1, "zab" => 1 );
	$whitelist = array( "3gp" => 1, "abw" => 1, "ai" => 1, "aiff" => 1, "amr" => 1, "asf" => 1, "asx" => 1, "avi" => 1, "bmp" => 1, "cda" => 1, "cdr" => 1, "csv" => 1, "djvu" => 1, "doc" => 1, "docx" => 1, "epub" => 1, "flac" => 1, "gif" => 1, "jpeg" => 1, "jpg" => 1, "key" => 1, "m4a" => 1, "midi" => 1, "mkv" => 1, "mov" => 1, "mp3" => 1, "mp4" => 1, "mpeg" => 1, "mpg" => 1, "odf" => 1, "odg" => 1, "ods" => 1, "odt" => 1, "ogg" => 1, "ogv" => 1, "ott" => 1, "pdf" => 1, "png" => 1, "pot" => 1, "potx" => 1, "pps" => 1, "ppsx" => 1, "ppt" => 1, "pptx" => 1, "ps" => 1, "psd" => 1, "rtf" => 1, "sdd" => 1, "sdw" => 1, "snd" => 1, "sxw" => 1, "tif" => 1, "tiff" => 1, "ts" => 1, "txt" => 1, "vsd" => 1, "wav" => 1, "wbmp" => 1, "wma" => 1, "wmv" => 1, "wpd" => 1, "xls" => 1, "xlsx" => 1 );
	//extract and check extension from filename
	$ext = wfu_fileext($filename);
	return isset($whitelist[$ext]);
}

/**
 * Validate MIME Type of File.
 *
 * This function validates the MIME type of a file. It is noted that $filepath
 * parameter holds the path to the contents of the file, however the name of the
 * file is provided by $filename parameter.
 *
 * @since 4.24.9
 *
 * @param string $filepath The path to the file contents.
 * @param string $filename The name of the file.
 *
 * @return array {
 *         The validation result array.
 *
 *         @type bool $pass True if validation passes, false otherwise.
 *         @type string $result A result string holding validation data.
 * }
 */
function wfu_validate_mime_type($filepath, $filename) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	// Mime type validation exceptions:
	//  A: pass files having no mime type
	//  B: pass files having no extension
	//  C: pass files having an extension with no associated mime types
	//  D: pass files having a non-matching mime type
	// By default no exceptions are allowed.
	$exceptions = WFU_VAR("WFU_MIMETYPE_VAL_EXCEPTIONS");
	$mime_type = wfu_mime_type_of_file($filepath);
	$ret = array( "pass" => true, "result" => "" );
	// check if mime type of file exists
	if ( $mime_type === null ) {
		$ret["result"] = "A";
		$ret["pass"] = ( strpos($exceptions, "A") !== false );
	}
	else {
		$mime_type = strtolower($mime_type);
		$mime_types = wfu_extensions_mime_types();
		$ext = strtolower(wfu_fileext($filename));
		// check if file has an extension
		if ( empty($ext) ) {
			$ret["result"] = "B:".$mime_type;
			$ret["pass"] = ( strpos($exceptions, "B") !== false );
		}
		// check if file extension has any associated mime types
		elseif ( !isset($mime_types[$ext]) ) {
			$ret["result"] = "C:".$mime_type;
			$ret["pass"] = ( strpos($exceptions, "C") !== false );
		}
		// check if file mime type matches its extension's associated mime types
		elseif ( !in_array( $mime_type, $mime_types[$ext] ) ) {
			$ret["result"] = "D:".$mime_type;
			$ret["pass"] = ( strpos($exceptions, "D") !== false );
		}
	}
	/**
	 * Custom MIME Type Validation
	 * 
	 * Allows internal processes to perform custom validation of MIME type.
	 *
	 * @since 4.25.0
	 *
	 * @param array $ret {
	 *        The validation result array.
	 *
	 *        @type bool $pass True if validation passes, false otherwise.
	 *        @type string $result A result string holding validation data.
	 * }
	 * @param string $filepath Path to the file contents.
	 * @param string $filename Name of the file.
	 * @param string $ext Extension of the file.
	 */
	$ret = apply_filters("_wfu_validate_mime_type", $ret, $filepath, $filename, $ext);
	
	return $ret;
}

/**
 * Post-Load File Security Checks.
 *
 * This function runs security checks on an uploaded file after it has been
 * fully loaded. It only performs MIME type check and content check.
 *
 * @since 4.24.9
 *
 * @param string $filepath The path to the file.
 * @param array $params The uploader instance shortcode params.
 *
 * @return array {
 *         The check result array.
 *
 *         @type bool $pass True if check passes, false otherwise.
 *         @type string $result A result string holding check data.
 * }
 */
function wfu_post_load_security_checks($filepath, $params) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	$ret = array( "pass" => true, "result" => "" );
	// By default for simple uploads the security checks are not executed after
	// file has fully loaded and stored.
	$execute_file_security_checks = false;
	/**
	 * Customize Security Checks Execution.
	 *
	 * This filter allows custom actions to customize whether the security
	 * checks will be executed or not.
	 *
	 * @since 4.24.10
	 *
	 * @param bool $execute_file_security_checks Whether checks will run or not.
	 * @param string $filepath The path of the file.
     * @param array $params The uploader instance shortcode params.
	 */
	$execute_file_security_checks = apply_filters( "_wfu_post_load_security_checks", $execute_file_security_checks, $filepath, $params );
	if ( $execute_file_security_checks ) {
		$ret = wfu_execute_file_security_checks(array( 'mime', 'content' ), $filepath, wfu_basename($filepath), $params);
	}	
	
	return $ret;
}

/**
 * During-Upload File Security Checks.
 *
 * This function runs security checks on a partially uploaded file. The checks
 * are executed for non-chunked uploads only. Since the file is in a temporary
 * location with a temporary filename, the tru filename of the file must also be
 * provided.
 *
 * @since 4.24.9
 *
 * @redeclarable
 *
 * @param string $filepath The path to the file.
 * @param string $filename The filename of the file.
 * @param array $params The uploader instance shortcode params.
 *
 * @return array {
 *         The check result array.
 *
 *         @type bool $pass True if check passes, false otherwise.
 *         @type string $result A result string holding check data.
 * }
 */
function wfu_during_upload_security_checks($filepath, $filename, $params) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	$ret = array( "pass" => true, "result" => "" );
	// By default for simple uploads the security checks are executed on the
	// temporarily uploaded file during the upload.
	$execute_file_security_checks = true;
	/**
	 * Customize Security Checks Execution.
	 *
	 * This filter allows custom actions to customize whether the security
	 * checks will be executed or not.
	 *
	 * @since 4.24.10
	 *
	 * @param bool $execute_file_security_checks Whether checks will run or not.
	 * @param string $filepath The path of the file.
	 * @param string $filename The filename of the file.
     * @param array $params The uploader instance shortcode params.
	 */
	$execute_file_security_checks = apply_filters( "_wfu_during_upload_security_checks", $execute_file_security_checks, $filepath, $filename, $params );
	if ( $execute_file_security_checks ) {
		$ret = wfu_execute_file_security_checks(array( 'mime', 'content' ), $filepath, $filename, $params);
	}	
	
	return $ret;
}

/**
 * Execute File Security Checks.
 *
 * This function runs security checks on a file. The type of security checks is
 * determined by $checks parameter. In case the file is stored in a temporary
 * place with a temporary filename, the real filename of the file must also be
 * provided.
 *
 * @since 4.24.10
 *
 * @redeclarable
 *
 * @param array $checks An array of checks to perform. It currently supports
 *        'mime' and 'content' checks.
 * @param string $filepath The path to the file.
 * @param string $filename The filename of the uploaded file.
 * @param array $params The uploader shortcode params.
 *
 * @return array {
 *         The check result array.
 *
 *         @type bool $pass True if check passes, false otherwise.
 *         @type string $result A result string holding check data.
 * }
 */
function wfu_execute_file_security_checks($checks, $filepath, $filename, $params) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	$ret = array( "pass" => true, "result" => "" );
	if ( in_array( 'mime', $checks ) ) {
		// perform MIME type check
		$mime = wfu_validate_mime_type($filepath, $filename);
		if ( !$mime["pass"] ) {
			$ret["pass"] = false;
			$code = substr($mime["result"], 0, 1);
			if ( $code === "A" ) $ret["result"] = "mime:".WFU_ERROR_ADMIN_FILE_NOMIME;
			elseif ( $code === "B" ) $ret["result"] = "mime:".WFU_ERROR_ADMIN_FILE_NOEXT;
			elseif ( $code === "C" ) $ret["result"] = "mime:".WFU_ERROR_ADMIN_FILE_NOASSOCMIME;
			elseif ( $code === "D" ) $ret["result"] = "mime:".WFU_ERROR_ADMIN_FILE_INVALIDMIME.substr($mime["result"], 2);
			else $ret["result"] = "mime:".WFU_ERROR_ADMIN_FILE_MIMEUKNOWN;
			return $ret;
		}
		else {
			$ret["result"] = $mime["result"];
		}
	}
	if ( in_array( 'content', $checks ) ) {
		// perform file content scan for scripts and suspicious patterns
		$content_check = wfu_security_filecontent_checks($filepath, $filename);
		if ( $content_check !== true ) {
			$ret["pass"] = false;
			$ret["result"] = "content:".$content_check;
			return $ret;
		}
	}
	
	return $ret;
}

/**
 * File Content Security Checks.
 *
 * This function runs security checks on the contents of a file. It determines
 * which patterns to include in the check and then it performs the scan.
 *
 * @since 4.24.9
 *
 * @redeclarable
 *
 * @param string $filepath The path to the file.
 * @param string $filename The filename of the file.
 *
 * @return bool|string True if file passes security checks, otherwise an admin
 *         error message.
 */
function wfu_security_filecontent_checks($filepath, $filename) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	$patterns = array();
	// determine script patterns to be included in scan
	$script_pattern = wfu_content_scan_script_pattern($filepath, $filename);
	if ( !empty($script_pattern) ) $patterns['script'] = $script_pattern;
	// determine heuristic patterns to be included in scan
	$heuristic_pattern = wfu_content_scan_heuristic_pattern($filepath, $filename);
	if ( !empty($heuristic_pattern) ) $patterns['heuristic'] = $heuristic_pattern;
	if ( count($patterns) === 0 ) return true;
	// perform the scan and analyze results
	$res = wfu_scan_file_contents($filepath, $patterns, intval(WFU_VAR("WFU_FILESCAN_OVERLAPSIZE")));
	if ( $res === null ) return WFU_ERROR_ADMIN_FILE_NOREADCONTENTS;
	elseif ( $res !== false ) {
		if ( $res === 'heuristic' ) return WFU_ERROR_ADMIN_FILE_HASHEURISTIC;
		else return WFU_ERROR_ADMIN_FILE_HASSCRIPTTAGS;
	}
	
	return true;
}

/**
 *  Checks if wildcard pattern is wide
 *  
 *  This function checks whether the wildcard pattern defines a very wide
 *  extension range. To do this, it first finds the extension part of the
 *  pattern, by finding the last occurrence of dot (.) or question mark (?) or
 *  dot in square brackets ([.]). All following characters are the extension.
 *  If the extension part contains the asterisk symbol (*) or the question mark
 *  (?) symbol, then the extension is considered to be very wide. In this case
 *  the uploaded file's extension must be included in the white list of allowed
 *  extensions. It is noted that the asterisk symbol (*) does not match all
 *  characters, as it is defined by the wildcard syntax, but all except the dot
 *  (.). This policy applies to uploadpatterns attribute of the plugin's 
 *  shortcode in order to improve security. An administrator can change this
 *  policy and make the asterisk symbol match all characters (including dot) by
 *  setting the environment variable "Wildcard Asterisk Mode" to "loose". In
 *  this case the function modifies its logic a little bit.
 *  
 *  @param string $pattern the wildcard pattern
 *  
 *  @return bool whether the pattern is wide or not
 */
function wfu_is_pattern_wide($pattern) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	$in_brackets = false;
	$pos = -1;
	$asterisk_count = 0;
	$last_asterisk_pos = 0;
	$question_mark_count = 0;
	$last_question_mark_pos = -1;
	//in case that the asterisk mode is loose (we allow the asterisk to match a
	//dot) then a loose mode asterisk (*) is equivalent to two strict mode
	//asterisks and a dot in between (*.*)
	if ( WFU_VAR("WFU_WILDCARD_ASTERISK_MODE") != "strict" )
		$pattern = str_replace("*", "*.*", $pattern);
	for ($i = strlen($pattern) - 1; $i >= 0; $i--) {
		$c = $pattern[$i];
		if ( !$in_brackets && $c == "." ) {
			$pos = $i;
			break;
		}
		elseif ( !$in_brackets && $c == "*" ) {
			$asterisk_count ++;
			if ( $asterisk_count == 1 ) $last_asterisk_pos = $i;
		}
		elseif ( !$in_brackets && $c == "?" ) {
			$question_mark_count ++;
			if ( $question_mark_count == 1 ) $last_question_mark_pos = $i;
		}
		elseif ( !$in_brackets && $c == "]" ) {
			$in_brackets = true;
			$pos = $i;
		}
		elseif ( $in_brackets && $c == "." ) break;
		elseif ( $in_brackets && $c == "[" ) {
			$in_brackets = false;
			$pos = -1;
		}
	}
	$is_wide = false;
	//if there is a dot symbol in pattern, then the pattern is wide if it
	//contains at least one asterisk or question mark
	if ( $pos > -1 ) $is_wide = ( $asterisk_count + $question_mark_count > 0 );
	//if there is no dot symbol in pattern however there are at least two
	//question marks, this makes the pattern wide
	elseif ( $question_mark_count > 1 ) $is_wide = true;
	//if there is no dot symbol in pattern however there is one question mark
	//then the pattern is wide if there is at least one asterisk after the
	//question mark
	elseif ( $question_mark_count == 1 ) $is_wide = ( $asterisk_count > 0 && $last_asterisk_pos < $last_question_mark_pos );
	return $is_wide;
}

/**
 *  Checks if the file extension matches the wildcard pattern
 *  
 *  This function checks whether the extension of the file matches the wildcard
 *  pattern. If it does, then it will also check whether the pattern is very
 *  wide. In this case, it will also check if the extension of the file is
 *  included in the white list, otherwise the file will be rejected. This is
 *  an additional measure to avoid unwanted files getting uploaded. It will
 *  force the administrators to impose stricter patterns. If an administrator
 *  wants to avoid the whitelist check, he/she can use the square brackets to
 *  define range of characters, e.g. *.mp[2-4ag] will match .mp2, .mp3, .mp4,
 *  .mpa and .mpg files without performing the whitelist check. It is noted that
 *  the asterisk symbol (*) does not match all characters, as it is defined by
 *  the wildcard syntax, but all except the dot (.). This policy applies to
 *  uploadpatterns attribute of the plugin's shortcode in order to improve
 *  security.
 *  
 *  @param string $pattern the wildcard pattern
 *  @param string $filename the uploaded file
 *  
 *  @return bool whether the file extension matches the pattern or not
 */
function wfu_file_extension_matches_pattern($pattern, $filename) {
	$match = ( wfu_upload_plugin_wildcard_match($pattern, $filename, ( WFU_VAR("WFU_WILDCARD_ASTERISK_MODE") == "strict" )) ? true : false );
	//in case the file extension matches the pattern, however the pattern is
	//very wide, then we also need to check that the extension is whitelisted
	if ( $match && wfu_is_pattern_wide($pattern) )
		$match = wfu_file_extension_whitelisted($filename);
	return $match;
}

/**
 *  Checks if the upload is a Denial-Of-Service (DOS) attack
 *  
 *  This function checks how many files have been uploaded within a specific
 *  amount of time, defined by 'Denial-Of-Service Time Interval' environment
 *  variable. If the number of files, defined by 'Denial-Of-Service File Limit'
 *  environment variable, has been exceeded then this is considered to be a
 *  Denial-Of-Service (DOS) attack.
 *  
 *  @return bool whether this is a Denial-Of-Service (DOS) attack or not.
 */
function wfu_check_DOS_attack() {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	global $wpdb;
	$DOS_attack = false;
	$now = time();
	$table_name1 = $wpdb->prefix . "wfu_log";
	$filelimit = (int)WFU_VAR("WFU_DOS_ATTACKS_FILE_LIMIT") - 1;
	$timeinterval = (int)WFU_VAR("WFU_DOS_ATTACKS_TIME_INTERVAL");
	$backtime = $wpdb->get_var("SELECT uploadtime FROM ".$table_name1." WHERE action = 'upload' ORDER BY idlog DESC LIMIT ".$filelimit.",1");
	if ( $backtime != null ) $DOS_attack = ( $now - $backtime <= $timeinterval );
	return $DOS_attack;
}

/**
 * Checks if File Contains PHP Tags
 *  
 * This function checks if file contents contain PHP tags. It will check files
 * depending on WFU_CHECKPHPTAGS_FILETYPES variable. It will also check if
 * the contents of the file can be retrieved or not.
 *
 * @since 4.13.1
 *
 * @redeclarable
 *
 * @param string $file The file path.
 * @param string $ext The file extension.
 *  
 * @return bool True if the file contains PHP tags or if its contents cannot be
 *         retrieved.
 */
function wfu_file_has_php_tags($file, $ext) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	if ( WFU_VAR("WFU_CHECKPHPTAGS_FILETYPES") == "none" ) return false;
	if ( WFU_VAR("WFU_CHECKPHPTAGS_FILETYPES") != "commonimages" || wfu_file_extension_is_common_image($ext) ) {
		//if ( ($data = wfu_file_get_contents($file, "wfu_file_has_php_tags")) === false ) return true;
		//$res = preg_match('/<\?(php)/i', $data);
		$res = wfu_scan_file_contents($file, array( '/<\?(php)/i' ), 100);
		return $res;
	}
	return false;
}

/**
 * Determine Content Scan Script Pattern
 *  
 * This function determines which script patterns to include in file content
 * scan, depending on mime type and extension of the file.
 *
 * @since 4.24.9
 *
 * @param string $filepath The path of the file.
 * @param string $filename The filename of the file.
 *  
 * @return string The script pattern.
 */
function wfu_content_scan_script_pattern($filepath, $filename) {
	$mime = wfu_mime_type_of_file($filepath);
	$ext = strtolower(wfu_fileext($filename));
	$pattern = "";
	// on text files seatch for opening PHP or script tags
	if ( $mime !== null && substr(strtolower($mime), 0, 4) === "text" ) {
		$pattern = '/<\?php|<script|<\?=/i';
	}
	elseif ( WFU_VAR("WFU_CHECKPHPTAGS_FILETYPES") !== "none" && ( WFU_VAR("WFU_CHECKPHPTAGS_FILETYPES") !== "commonimages" || wfu_file_extension_is_common_image($ext) ) ) {
		$pattern = '/<\?(php)/i';
	}
	/**
	 * Customize Scan Script Pattern.
	 *
	 * This filter allows custom actions to modify the scan script pattern.
	 *
	 * @since 4.24.9
	 *
	 * @param string $pattern The initial scan script pattern.
	 * @param string $filepath The path of the file.
	 * @param string $filename The filename of the file.
     * @param string $mime The MIME type of the file.
     * @param string $ext The file extension.
	 */
	$pattern = apply_filters( "_wfu_content_scan_script_pattern", $pattern, $filepath, $filename, $mime, $ext );
	return $pattern;
}

/**
 * Determine Content Scan Heuristic Pattern
 *  
 * This function determines which heuristic patterns to include in file content
 * scan, depending on mime type and extension of the file.
 *
 * @since 4.24.9
 *
 * @param string $filepath The path of the file.
 * @param string $filename The filename of the file.
 *  
 * @return string The script pattern.
 */
function wfu_content_scan_heuristic_pattern($filepath, $filename) {
	$mime = wfu_mime_type_of_file($filepath);
	$ext = strtolower(wfu_fileext($filename));
	$pattern = "";
	// on text files seatch for eval(), base64_decode() and shell_exec()
	// provided that the security level is higher that zero
	if ( intval(WFU_VAR("WFU_FILESCAN_SECURITY_LEVEL")) > 0 && $mime !== null && substr(strtolower($mime), 0, 4) === "text" ) {
		$pattern = '/eval\(|base64_decode\(|shell_exec\(/i';
	}
	/**
	 * Customize Scan Heuristic Pattern.
	 *
	 * This filter allows custom actions to modify the scan heuristic pattern.
	 *
	 * @since 4.24.9
	 *
	 * @param string $pattern The initial scan heuristic pattern.
	 * @param string $filepath The path of the file.
	 * @param string $filename The filename of the file.
     * @param string $mime The MIME type of the file.
     * @param string $ext The file extension.
	 */
	$pattern = apply_filters( "_wfu_content_scan_heuristic_pattern", $pattern, $filepath, $filename, $mime, $ext );
	return $pattern;
}

/**
 * Checks if Upload Dir is Forbidden
 *  
 * This function checks if the upload dir belongs to the forbidden ones.
 *
 * @since 4.16.3
 *
 * @redeclarable
 *
 * @param string $dir The upload dir.
 *  
 * @return bool True if the dir is forbidden, false otherwise.
 */
function wfu_is_dir_blacklisted($dir) {
	$a = func_get_args(); $a = WFU_FUNCTION_HOOK(__FUNCTION__, $a, $out); if (isset($out['vars'])) foreach($out['vars'] as $p => $v) $$p = $v; switch($a) { case 'R': return $out['output']; break; case 'D': die($out['output']); }
	global $wfu_dir_blacklist;
	//normalize and compare paths
	$dir = strtolower(str_replace('\\', '/', $dir));
	if ( substr($dir, -1) != '/' ) $dir .= '/';
	$found = false;
	foreach ( $wfu_dir_blacklist as $key => $item ) {
		$item = strtolower(str_replace('\\', '/', $item));
		if ( substr($item, -1) != '/' ) $item .= '/';
		if ( substr($dir, 0, strlen($item)) == $item ) {
			$found = true;
			break;
		}
	}
	return $found;
}