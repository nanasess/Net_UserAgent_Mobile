--TEST--
Net_UserAgent_Mobile: DoCoMo
--SKIPIF--
<?php if (!@include('Net/UserAgent/Mobile.php')) print 'skip'; ?>
--FILE--
<?php
//
// Test for: Net/UserAgent/Mobile.php
// Parts tested: - DoCoMo
//

error_reporting(E_ALL);
require_once('Net/UserAgent/Mobile.php');

$tests = array(
               // ua, version, html_version, model, cache_size, is_foma, vendor, series, options
               array('DoCoMo/1.0/D501i', '1.0', '1.0', 'D501i', 5, false, 'D', '501i'),
               array('DoCoMo/1.0/D502i', '1.0', '2.0', 'D502i', 5, false, 'D', '502i'),
               array('DoCoMo/1.0/D502i/c10', '1.0', '2.0', 'D502i', 10, false, 'D', '502i'),
               array('DoCoMo/1.0/D210i/c10', '1.0', '3.0', 'D210i', 10, false, 'D', '210i'),
               array('DoCoMo/1.0/SO503i/c10', '1.0', '3.0', 'SO503i', 10, false, 'SO', '503i'),
               array('DoCoMo/1.0/D211i/c10', '1.0', '3.0', 'D211i', 10, false, 'D', '211i'),
               array('DoCoMo/1.0/SH251i/c10', '1.0', '3.0', 'SH251i', 10, false, 'SH', '251i'),
               array('DoCoMo/1.0/R692i/c10', '1.0', '3.0', 'R692i', 10, false, 'R', '692i'),
               array('DoCoMo/2.0 P2101V(c100)', '2.0', '3.0', 'P2101V', 100, true, 'P', 'FOMA'),
               array('DoCoMo/2.0 N2001(c10)', '2.0', '3.0', 'N2001', 10, true, 'N', 'FOMA'),
               array('DoCoMo/2.0 N2002(c100)', '2.0', '3.0', 'N2002', 100, true, 'N', 'FOMA'),
               array('DoCoMo/2.0 D2101V(c100)', '2.0', '3.0', 'D2101V', 100, true, 'D', 'FOMA'),
               array('DoCoMo/2.0 P2002(c100)', '2.0', '3.0', 'P2002', 100, true, 'P', 'FOMA'),
               array('DoCoMo/2.0 MST_v_SH2101V(c100)', '2.0', '3.0', 'SH2101V', 100, true, 'SH', 'FOMA'),
               array('DoCoMo/2.0 T2101V(c100)', '2.0', '3.0', 'T2101V', 100, true, 'T', 'FOMA'),
               array('DoCoMo/1.0/D504i/c10', '1.0', '4.0', 'D504i', 10, false, 'D', '504i'),
               array('DoCoMo/1.0/D504i/c30/TD', '1.0', '4.0', 'D504i', 30, false, 'D', '504i', array('status' => 'TD')),
               array('DoCoMo/1.0/D504i/c10/TJ', '1.0', '4.0', 'D504i', 10, false, 'D', '504i', array('status' => 'TJ')),
               array('DoCoMo/1.0/F504i/c10/TB', '1.0', '4.0', 'F504i', 10, false, 'F', '504i', array('status' => 'TB')),
               array('DoCoMo/1.0/D251i/c10', '1.0', '4.0', 'D251i', 10, false, 'D', '251i'),
               array('DoCoMo/1.0/F251i/c10/TB', '1.0', '4.0', 'F251i', 10, false, 'F', '251i', array('status' => 'TB')),
               array('DoCoMo/1.0/F671iS/c10/TB', '1.0', '4.0', 'F671iS', 10, false, 'F', '671i', array('status' => 'TB')),
               array('DoCoMo/1.0/P503i/c10/serNMABH200331', '1.0', '3.0', 'P503i', 10, false, 'P', '503i', array('serial_number' => 'NMABH200331')),
               array('DoCoMo/2.0 N2001(c10;ser0123456789abcde;icc01234567890123456789)', '2.0', '3.0', 'N2001', 10, 1, 'N', 'FOMA', array('serial_number' => '0123456789abcde', 'card_id' => '01234567890123456789')),
               array('DoCoMo/1.0/eggy/c300/s32/kPHS-K', '1.0', '3.2', 'eggy', 300, false, null, null, array('bandwidth' => 32)),
               array('DoCoMo/1.0/P751v/c100/s64/kPHS-K', '1.0', '3.2', 'P751v', 100, false, 'P', null, array('bandwidth' => 64)),
               array('DoCoMo/1.0/P209is (Google CHTML Proxy/1.0)', '1.0', '2.0', 'P209is', 5, false, 'P', '209i', array('comment' => 'Google CHTML Proxy/1.0')),
               array('DoCoMo/1.0/F212i/c10/TB', '1.0', '4.0', 'F212i', 10, false, 'F', '212i', array('status' => 'TB')),
               array('DoCoMo/2.0 F2051(c100;TB)', '2.0', '4.0', 'F2051', 100, true, 'F', 'FOMA', array('status' => 'TB')),
               array('DoCoMo/2.0 N2051(c100;TB)', '2.0', '4.0', 'N2051', 100, true, 'N', 'FOMA', array('status' => 'TB')),
               array('DoCoMo/2.0 P2102V(c100;TB)', '2.0', '4.0', 'P2102V', 100, true, 'P', 'FOMA', array('status' => 'TB')),
               array('DoCoMo/1.0/N211iS/c10', '1.0', '3.0', 'N211iS', 10, false, 'N', '211i'),
               array('DoCoMo/1.0/P211iS/c10', '1.0', '3.0', 'P211iS', 10, false, 'P', '211i'),
               array('DoCoMo/1.0/N251iS/c10/TB', '1.0', '4.0', 'N251iS', 10, false, 'N', '251i', array('status' => 'TB')),
               array('DoCoMo/1.0/F661i/c10/TB', '1.0', '4.0', 'F661i', 10, false, 'F', '661i', array('status' => 'TB', 'is_gps' => true)),
               array('DoCoMo/1.0/D505i/c20/TC/W20H10', '1.0', '5.0', 'D505i', 20, false, 'D', '505i', array('status' => 'TC')),
               array('DoCoMo/1.0/SO505i/c20/TB/W21H09', '1.0', '5.0', 'SO505i', 20, false, 'SO', '505i', array('status' => 'TB')),
               array('DoCoMo/2.0 N2701(c100;TB)', '2.0', '4.0', 'N2701', 100, true, 'N', 'FOMA', array('status' => 'TB')),
               array('DoCoMo/1.0/SH505i/c20/TB/W24H12', '1.0', '5.0', 'SH505i', 20, false, 'SH', '505i', array('status' => 'TB')),
               array('DoCoMo/1.0/N505i/c20/TB/W20H10', '1.0', '5.0', 'N505i', 20, false, 'N', '505i', array('status' => 'TB'))
               );

$test_error_agents = array(
                           'DoCoMo/1.0/SO504i/abc/TB',
                           'DoCoMo/2.0 N2001(c10;ser35020000030796;icc8981100000200188565F)',
                           'DoCoMo/2.0 N2001(c10;ser350200000307969;icc8981100000200188565)'
                           );

print "Testing DoCoMo ...\n";

foreach ($tests as $value1) {
    $ua = array_shift($value1);
    $data = $value1;
    $agent = &Net_UserAgent_Mobile::factory($ua);
    print is_object($agent) . "\n";
    print get_parent_class($agent) . "\n";
    print get_class($agent) . "\n";
    print $agent->isDoCoMo() . "\n";
    print $agent->isJPhone() . "\n";
    print $agent->isEZweb() . "\n";
    print $agent->getName() . "\n";
    print $agent->getUserAgent() . "\n";
    print $agent->getVersion() . "\n";
    print $agent->getHTMLVersion() . "\n";
    print $agent->getModel() . "\n";
    print $agent->getCacheSize() . "\n";
    print $agent->isFOMA() . "\n";
    print $agent->getVendor() . "\n";
    print $agent->getSeries() . "\n";
    if (count($data) == 8) {
        foreach ($data[7] as $key2 => $value2) {
            print "Testing $key2 ...\n";
            switch ($key2) {
            case 'status':
                print $agent->getStatus() . "\n";
                break;
            case 'serial_number':
                print $agent->getSerialNumber() . "\n";
                break;
            case 'card_id':
                print $agent->getCardID() . "\n";
                break;
            case 'bandwidth':
                print $agent->getBandwidth() . "\n";
                break;
            case 'comment':
                print $agent->getComment() . "\n";
                break;
            case 'is_gps':
                print $agent->isGPS() . "\n";
                break;
            }
        }
    }
}

foreach ($test_error_agents as $value) {
    $_SERVER['HTTP_USER_AGENT'] = $value;
    $agent = &Net_UserAgent_Mobile::factory();
    print is_object($agent) . "\n";
    print get_class($agent) . "\n";
    if (Net_UserAgent_Mobile::isError($agent)) {
        print $agent->getMessage() . "\n";
    }
}
?>
--POST--
--GET--
--EXPECT--
Testing DoCoMo ...
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D501i
1.0
1.0
D501i
5

D
501i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D502i
1.0
2.0
D502i
5

D
502i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D502i/c10
1.0
2.0
D502i
10

D
502i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D210i/c10
1.0
3.0
D210i
10

D
210i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/SO503i/c10
1.0
3.0
SO503i
10

SO
503i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D211i/c10
1.0
3.0
D211i
10

D
211i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/SH251i/c10
1.0
3.0
SH251i
10

SH
251i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/R692i/c10
1.0
3.0
R692i
10

R
692i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 P2101V(c100)
2.0
3.0
P2101V
100
1
P
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 N2001(c10)
2.0
3.0
N2001
10
1
N
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 N2002(c100)
2.0
3.0
N2002
100
1
N
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 D2101V(c100)
2.0
3.0
D2101V
100
1
D
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 P2002(c100)
2.0
3.0
P2002
100
1
P
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 MST_v_SH2101V(c100)
2.0
3.0
SH2101V
100
1
SH
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 T2101V(c100)
2.0
3.0
T2101V
100
1
T
FOMA
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D504i/c10
1.0
4.0
D504i
10

D
504i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D504i/c30/TD
1.0
4.0
D504i
30

D
504i
Testing status ...
TD
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D504i/c10/TJ
1.0
4.0
D504i
10

D
504i
Testing status ...
TJ
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/F504i/c10/TB
1.0
4.0
F504i
10

F
504i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D251i/c10
1.0
4.0
D251i
10

D
251i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/F251i/c10/TB
1.0
4.0
F251i
10

F
251i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/F671iS/c10/TB
1.0
4.0
F671iS
10

F
671i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/P503i/c10/serNMABH200331
1.0
3.0
P503i
10

P
503i
Testing serial_number ...
NMABH200331
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 N2001(c10;ser0123456789abcde;icc01234567890123456789)
2.0
3.0
N2001
10
1
N
FOMA
Testing serial_number ...
0123456789abcde
Testing card_id ...
01234567890123456789
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/eggy/c300/s32/kPHS-K
1.0
3.2
eggy
300



Testing bandwidth ...
32
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/P751v/c100/s64/kPHS-K
1.0
3.2
P751v
100

P

Testing bandwidth ...
64
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/P209is (Google CHTML Proxy/1.0)
1.0
2.0
P209is
5

P
209i
Testing comment ...
Google CHTML Proxy/1.0
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/F212i/c10/TB
1.0
4.0
F212i
10

F
212i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 F2051(c100;TB)
2.0
4.0
F2051
100
1
F
FOMA
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 N2051(c100;TB)
2.0
4.0
N2051
100
1
N
FOMA
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 P2102V(c100;TB)
2.0
4.0
P2102V
100
1
P
FOMA
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/N211iS/c10
1.0
3.0
N211iS
10

N
211i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/P211iS/c10
1.0
3.0
P211iS
10

P
211i
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/N251iS/c10/TB
1.0
4.0
N251iS
10

N
251i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/F661i/c10/TB
1.0
4.0
F661i
10

F
661i
Testing status ...
TB
Testing is_gps ...
1
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/D505i/c20/TC/W20H10
1.0
5.0
D505i
20

D
505i
Testing status ...
TC
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/SO505i/c20/TB/W21H09
1.0
5.0
SO505i
20

SO
505i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/2.0 N2701(c100;TB)
2.0
4.0
N2701
100
1
N
FOMA
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/SH505i/c20/TB/W24H12
1.0
5.0
SH505i
20

SH
505i
Testing status ...
TB
1
net_useragent_mobile_common
net_useragent_mobile_docomo
1


DoCoMo
DoCoMo/1.0/N505i/c20/TB/W20H10
1.0
5.0
N505i
20

N
505i
Testing status ...
TB
1
net_useragent_mobile_error
Net_UserAgent_Mobile Error: no match
1
net_useragent_mobile_error
Net_UserAgent_Mobile Error: no match
1
net_useragent_mobile_error
Net_UserAgent_Mobile Error: no match
