-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2020 at 10:11 PM
-- Server version: 10.1.44-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adefathudin_hanung`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('04alb6lc4sq6cet9hp1nsnsrlgetjo1g', '::1', 1589099088, '__ci_last_regenerate|i:1589099088;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('05n1ulm6gag5ibed3ad61762kj3i8dq1', '::1', 1588949712, '__ci_last_regenerate|i:1588949712;nik|s:3:\"123\";'),
('1djqtch9f3hbb3cm4f5g69sbkdjut5nj', '::1', 1588492056, '__ci_last_regenerate|i:1588492056;'),
('1ejbjtq2ethk8krnpfllm3v9a30j2ohf', '::1', 1588485118, '__ci_last_regenerate|i:1588485118;'),
('1kvbrk4o4n3hf6ehbqobnc4r2atbn1le', '::1', 1588483177, '__ci_last_regenerate|i:1588483177;'),
('1nkte6lm8fs1d4e5gpg0g0p1528ggoir', '::1', 1589084373, '__ci_last_regenerate|i:1589084373;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('1v8gvt53rslmob8fceor36ebopveha8p', '::1', 1588497835, '__ci_last_regenerate|i:1588497622;'),
('2218ki2t3ip4d7po3vvdthec8e95fbqs', '::1', 1588494790, '__ci_last_regenerate|i:1588494790;'),
('228uppi121usat7lf25pvog7k3i9mlou', '::1', 1588490150, '__ci_last_regenerate|i:1588490150;'),
('22othq22kl16vk9kpr9kp5jb13lkqmlf', '::1', 1588927559, '__ci_last_regenerate|i:1588927559;'),
('24atf8qq9pkjt7a6m8ri60bsqbg7gd3a', '::1', 1589087927, '__ci_last_regenerate|i:1589087927;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('24jcjdle01jepcv8ckcbfsjnl5aiao4q', '::1', 1589396978, ''),
('2bmd88ketn15t2h2kpt9vjoj0fkf3ud5', '::1', 1589052905, '__ci_last_regenerate|i:1589052905;nik|s:1:\"1\";level|N;'),
('2fci9e9lc30tlt2bjqonl6lveai5a8gl', '::1', 1589099897, '__ci_last_regenerate|i:1589099897;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('2iphabmiq070l2kp5hlbplgj9me61fdv', '::1', 1588495806, '__ci_last_regenerate|i:1588495806;'),
('2uu4ukt226mn6t95tnfa5i2sh96o6kao', '::1', 1589084735, '__ci_last_regenerate|i:1589084733;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('323726095jol113o12lqu9q40b8iav06', '::1', 1588737807, '__ci_last_regenerate|i:1588737807;'),
('37mmfqdonli93f6adnmnge1jg3p6ara5', '::1', 1589105911, '__ci_last_regenerate|i:1589105906;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('3d2nbnphjlfuvba0hhll01t0fcrdqpci', '::1', 1588495461, '__ci_last_regenerate|i:1588495461;'),
('3m2fll99428j0oqf7us3ugh9lf6eupsm', '::1', 1588963991, '__ci_last_regenerate|i:1588963991;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('40geocmo13e890q053cge8oofd9u4c7j', '::1', 1588493484, '__ci_last_regenerate|i:1588493484;'),
('44af87lkanrr0ca6l60rdi5knmhqirfo', '::1', 1589039936, '__ci_last_regenerate|i:1589039936;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('4eraml0hiceojngq6pl7ulsrvs2br26r', '::1', 1588497622, '__ci_last_regenerate|i:1588497622;'),
('4rhuvt2t20dhfb1q1u2nch48vcptpo1s', '::1', 1589397063, ''),
('55qa8nc8hp3ng11t3i0ujmds3alvgbb3', '::1', 1588482826, '__ci_last_regenerate|i:1588482826;'),
('5a5kmi01csquccri3u2fmcronab7lkfu', '::1', 1589041810, '__ci_last_regenerate|i:1589041810;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('5dng5rb3dpeo83739ptc9isvnovhimjr', '::1', 1588778880, '__ci_last_regenerate|i:1588778818;'),
('5eftu3lorne0hah0fvusu2j4392kvnun', '::1', 1589051795, '__ci_last_regenerate|i:1589051795;nik|s:1:\"1\";level|N;'),
('5qcuss1ide8s353po9fv1p7tld6gci9l', '::1', 1589054288, '__ci_last_regenerate|i:1589054288;nik|s:1:\"1\";level|N;'),
('631m6maks09vooso3lmca43hnvc08qet', '::1', 1588954489, '__ci_last_regenerate|i:1588954489;nik|s:3:\"123\";'),
('64qsjl2nm6vg9r8f9nop4t2k7sugsp1f', '::1', 1588957404, '__ci_last_regenerate|i:1588957404;nik|s:3:\"123\";'),
('671579n9m3hrne5nq8m86ol9chv9ehif', '::1', 1589080970, '__ci_last_regenerate|i:1589080892;nik|s:1:\"1\";level|N;'),
('6dh9ibhrj916s1j4h33627rum65ns3na', '::1', 1588778818, '__ci_last_regenerate|i:1588778818;'),
('6i9s3v3f4f58kvsm710j27t18e1qa5vu', '::1', 1588485478, '__ci_last_regenerate|i:1588485478;'),
('6j65488vjllosg2221oprmma7f4btqs6', '::1', 1589089294, '__ci_last_regenerate|i:1589089294;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('6pjpjh0q4nhfica4f5i9rf5hs2fng9p3', '::1', 1589054669, '__ci_last_regenerate|i:1589054669;nik|s:1:\"1\";level|N;'),
('6qsg7h1gkpp77hke5o799ekbldfrskvo', '::1', 1588923514, '__ci_last_regenerate|i:1588923514;'),
('6rme77jtkr5cb7sl2khlagbv3r7b70aj', '::1', 1588491702, '__ci_last_regenerate|i:1588491702;'),
('6tpovkanf62h2j0le5l57rlfrtphmg6q', '::1', 1589102887, '__ci_last_regenerate|i:1589102887;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('6up6uj9h99thln05dt75gh8thqktcmqd', '::1', 1589105730, '__ci_last_regenerate|i:1589105730;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('79nvoifl9r08fdr96ujpaeof4iievt4k', '::1', 1589103519, '__ci_last_regenerate|i:1589103519;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('7pk3g6mliqleajpcgvcufdqomafdto94', '::1', 1588928418, '__ci_last_regenerate|i:1588928307;'),
('7qpk2al41osu991p97cao3eas8lobrf7', '::1', 1588486977, '__ci_last_regenerate|i:1588486977;'),
('7uiuts3t6a58ev3ruufflsbt652ql8hm', '::1', 1588963013, '__ci_last_regenerate|i:1588963013;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('8a4gis1p81bn54d4jagfauqjvg3dnfsn', '::1', 1588951050, '__ci_last_regenerate|i:1588951050;nik|s:3:\"123\";'),
('8dh9n43f92o6e6o01bl5cv5picq22ai1', '::1', 1588737502, '__ci_last_regenerate|i:1588737502;'),
('8f2homh9fqaooce0fn6ku3jp0oas2p1a', '::1', 1589103856, '__ci_last_regenerate|i:1589103856;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('8ihrjhhpphkk25ekf84cogqec00984um', '::1', 1589098596, '__ci_last_regenerate|i:1589098596;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('97kfjdp0dga9vobn8ua06u9dudlk3o8g', '::1', 1588491382, '__ci_last_regenerate|i:1588491382;'),
('996p7f8q5ng2j8d68e6k4t719uehg9ea', '::1', 1588963333, '__ci_last_regenerate|i:1588963333;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('9jr4i9g3q3ofakg9tm51qftcc8phkugs', '::1', 1589040645, '__ci_last_regenerate|i:1589040645;nik|s:3:\"789\";level|s:5:\"Clerk\";'),
('9ol08kk1tgsi2tov76kqkb1hejks95jf', '::1', 1588962136, '__ci_last_regenerate|i:1588962136;nik|s:3:\"789\";level|s:5:\"Clerk\";'),
('9v00ederknojir9o4sgkn4q507dav4ql', '::1', 1589043879, '__ci_last_regenerate|i:1589043879;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('9vb1bsigkf9j4b8r29hj90b6spqg8f64', '::1', 1589084733, '__ci_last_regenerate|i:1589084733;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('a0gvnqp9hiq5sfbmm8q138c7cvj03v0n', '::1', 1588950474, '__ci_last_regenerate|i:1588950474;nik|s:3:\"123\";'),
('a4ujrpts9sl6hu6o8ccbd7lkgnkd7gni', '::1', 1588958625, '__ci_last_regenerate|i:1588958625;nik|s:3:\"123\";level|O:8:\"stdClass\":1:{s:5:\"level\";s:8:\"kasatpel\";}'),
('a667s039h2tmp1hfter5drpt9qjgbmhf', '::1', 1589044552, '__ci_last_regenerate|i:1589044552;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('a90oapcpf9ocaq80f3qto3pa1v2n0tss', '::1', 1588484683, '__ci_last_regenerate|i:1588484683;'),
('aii9ls8oq7ivgr79vvvfir0fjuih560s', '::1', 1588492561, '__ci_last_regenerate|i:1588492561;'),
('an18ugmt74g0g97kk31o2davpt4a50gh', '::1', 1590160172, '__ci_last_regenerate|i:1590160172;'),
('ar7frtcflph32foscliobiksg97s5rni', '::1', 1588948236, '__ci_last_regenerate|i:1588948236;'),
('bdb8ntpnlsc3q57qv1oevb0ol62kk5rf', '::1', 1589096522, '__ci_last_regenerate|i:1589096522;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('bhna6mejc5ob3sufknoa0c2eihs30n3t', '::1', 1589055719, '__ci_last_regenerate|i:1589055719;nik|s:1:\"1\";level|N;'),
('bpfnio06h1mo2hm1lv17a3vgvu3g3ci9', '::1', 1588484361, '__ci_last_regenerate|i:1588484361;'),
('btorjff275cn4qjavleuid2gkbrt9vrr', '::1', 1588867889, '__ci_last_regenerate|i:1588867889;'),
('c0qcs5k15ktj0javgo4cglpiqrq1s99u', '::1', 1588964027, '__ci_last_regenerate|i:1588963991;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('cootbdtr220n1k1h2723vcr7e51u6abp', '::1', 1588494263, '__ci_last_regenerate|i:1588494263;'),
('dov13voi8q6kv8eoj6p173qlqfpjmgr2', '::1', 1589082335, '__ci_last_regenerate|i:1589082335;nik|s:1:\"2\";level|N;'),
('dsnhi5uetadm1nsh6avmaa6igq8f1444', '::1', 1588862420, '__ci_last_regenerate|i:1588862420;'),
('e82cntlhn3q9iljoqgnqpvvntb00vftb', '::1', 1589043425, '__ci_last_regenerate|i:1589043425;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('efkqgm0qfiaht6kta1la62nhv7psoa3u', '::1', 1589052101, '__ci_last_regenerate|i:1589052101;nik|s:1:\"1\";level|N;'),
('ej5670dfgijj4mr6piutd7kavkfel1f5', '::1', 1589042861, '__ci_last_regenerate|i:1589042861;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('eta35um09jr8066d9h2re9cnjl4grobu', '::1', 1588497311, '__ci_last_regenerate|i:1588497311;'),
('eurbpobbpkaatr1n9jr6k23l4bg0a37m', '::1', 1589083758, '__ci_last_regenerate|i:1589083758;nik|s:1:\"2\";level|N;'),
('fjm9j6dr9dmeice0g8obp7nj43ea0tv3', '::1', 1589894466, '__ci_last_regenerate|i:1589894456;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('fsdi9ldalj808ihvnpgfq106g71cp017', '::1', 1588924262, '__ci_last_regenerate|i:1588924262;'),
('ft95v4hm9nkc18djlcdd5qcmgmnvuhu8', '::1', 1589038127, '__ci_last_regenerate|i:1589038127;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('g0mjrnmvpbn04g7smg73pjiun4v0rrkd', '::1', 1588861786, '__ci_last_regenerate|i:1588861786;'),
('g6f2oaqpofoi9arpne6c1b95mo91m405', '::1', 1589037582, '__ci_last_regenerate|i:1589037582;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('gaajvpfcu5n76qoaqrthu43ld4e4bn26', '::1', 1589086166, '__ci_last_regenerate|i:1589086166;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('geqes9rqg7sb3df5brcufenh0vbeolpc', '::1', 1588741592, '__ci_last_regenerate|i:1588741592;'),
('gopvc1c0hk8flfl6num0pkqg9fnjngpv', '::1', 1588490552, '__ci_last_regenerate|i:1588490552;'),
('h13krf07i2vl26v8jevi8a1g507milvd', '::1', 1588925779, '__ci_last_regenerate|i:1588925779;'),
('h8d96l3rtt7148v4oho4oe70kciqu6a1', '::1', 1588924595, '__ci_last_regenerate|i:1588924595;'),
('h9b882lt575fakllubhgveo2p3sgjtsc', '::1', 1589094780, '__ci_last_regenerate|i:1589094780;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('h9v198u45sgkvu79l505f08lflp7hl6m', '::1', 1588868225, '__ci_last_regenerate|i:1588868225;'),
('henb9ui9e5ur2o3sqhlur99k7d1lscpb', '::1', 1589035238, '__ci_last_regenerate|i:1589035238;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('i0qk6o5s78fs64pjrnamhhq32dte0v7h', '::1', 1588949394, '__ci_last_regenerate|i:1588949394;'),
('i7lvah1vkjh8jmbb22ai98lo2mt6dkkt', '::1', 1589086786, '__ci_last_regenerate|i:1589086786;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('ibju0h3fmno02r42d93i1cr3a29dfe5u', '::1', 1588927895, '__ci_last_regenerate|i:1588927895;'),
('ieas8lmlhiq302kl8nf3n32a94dsep2i', '::1', 1588483897, '__ci_last_regenerate|i:1588483897;'),
('ifcpbsp0hidsgubg7j0ts9thvooe4vbb', '::1', 1588953058, '__ci_last_regenerate|i:1588953058;nik|s:3:\"123\";'),
('is6b4dd44337u8ig6lcdp22bctcc2erl', '::1', 1589050736, '__ci_last_regenerate|i:1589050736;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('is827ckftji7vmauhaa33nib9ibsp7u1', '::1', 1588963666, '__ci_last_regenerate|i:1588963666;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('j38icsv8keu6bv5mubrp80ftsfql2sdc', '::1', 1588923881, '__ci_last_regenerate|i:1588923881;'),
('jf5pvc0a3mui38ll2mub9m148s8fr410', '::1', 1589104807, '__ci_last_regenerate|i:1589104807;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('jmhvobu0tf8bpsh6jkh0o86buc5eo58j', '::1', 1588952721, '__ci_last_regenerate|i:1588952721;nik|s:3:\"123\";'),
('jpv2b1mpedthirla30dom7if50tp93at', '::1', 1588925386, '__ci_last_regenerate|i:1588925386;'),
('jsn2rkdn3pfsdkf0r6c8j2ngbeq3vv3n', '::1', 1589036801, '__ci_last_regenerate|i:1589036801;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('jvfe0iihm80vk59anj5s5bt4ib2882dq', '::1', 1589041143, '__ci_last_regenerate|i:1589041143;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('k2nn79844p313hklqesvgfak5s46tjv1', '::1', 1588862090, '__ci_last_regenerate|i:1588862090;'),
('kc6ndqtv7rql11pu0peg9mttaovgq5cd', '::1', 1588953658, '__ci_last_regenerate|i:1588953658;nik|s:3:\"123\";'),
('kdvt3umq1rgj701kv8fn9oak7p7k59mq', '::1', 1589098255, '__ci_last_regenerate|i:1589098255;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('kj3nlmlpak5hiq30ul5e4nviuvhdic8d', '::1', 1589105111, '__ci_last_regenerate|i:1589105111;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('ktgabugjkqvhap6amilsa3siukrmif5u', '::1', 1589041451, '__ci_last_regenerate|i:1589041451;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('l3sq50oef8l42i1qvrcridlloass8n4t', '::1', 1589055406, '__ci_last_regenerate|i:1589055406;nik|s:1:\"1\";level|N;'),
('l41hm8c75d4dd7kvokgkmebr0q69faci', '::1', 1589042199, '__ci_last_regenerate|i:1589042199;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('ld5dbnao9qpp0e9ep4lvf0vqh8n80t64', '::1', 1589104255, '__ci_last_regenerate|i:1589104255;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('lf8qnb3oh09sjhqsko43hqlbkn2se67a', '::1', 1589080892, '__ci_last_regenerate|i:1589080892;nik|s:1:\"1\";level|N;'),
('lg6mvn4ieih2bbprtii3ddf09h1b9bsc', '::1', 1589391188, '__ci_last_regenerate|i:1589391015;nik|s:1:\"3\";level|s:5:\"Clerk\";'),
('m0qmhcjnbn0ejf95fplpadl1vkbi65s5', '::1', 1589080521, '__ci_last_regenerate|i:1589080521;nik|s:1:\"1\";level|N;'),
('mp2h32t720dpler8l4h8k7pspblp6ale', '::1', 1589046937, '__ci_last_regenerate|i:1589046937;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('mqbi4icfud9eea1de2r0o2v5vn3fatjd', '::1', 1589038576, '__ci_last_regenerate|i:1589038576;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('mrmlj3rclb0mb69249a1qef0kenko1iv', '::1', 1588954827, '__ci_last_regenerate|i:1588954827;nik|s:3:\"123\";'),
('n57ausqtuqfeku6hvkafngv77cv3q3rr', '::1', 1588959411, '__ci_last_regenerate|i:1588959411;nik|s:3:\"456\";level|s:7:\"Finance\";'),
('nf1vfjujb4rge4f47jtrkefe19151dlc', '::1', 1589086473, '__ci_last_regenerate|i:1589086473;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('nfbt2g2de59mcdt6m5ha5h9igahnhnme', '::1', 1588486160, '__ci_last_regenerate|i:1588486160;'),
('nknphq57or4088l4q3m6r35do2v6gg8v', '::1', 1589045753, '__ci_last_regenerate|i:1589045753;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('nsaerdlon7r7er431j95bj1cqjo2b3tc', '::1', 1588493083, '__ci_last_regenerate|i:1588493083;'),
('o79ajr9ktimnghj7a2jbjnroos9ol8qh', '::1', 1588861481, '__ci_last_regenerate|i:1588861481;'),
('ogtfsh7a382trogab2c7u1mput5gfc2g', '::1', 1589045407, '__ci_last_regenerate|i:1589045407;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('ojkj6gphpg7527uq2l9u7sn8berhc4cn', '::1', 1588490879, '__ci_last_regenerate|i:1588490879;'),
('olutpr2sc4uskl45fph9r20tasuht94d', '::1', 1588958030, '__ci_last_regenerate|i:1588958030;level|N;nik|s:3:\"123\";'),
('ormeophkrf58ltco1bjoo0a8kvv4isej', '::1', 1588483554, '__ci_last_regenerate|i:1588483554;'),
('ouqq51l7d55jdiacvvrra4bec050m115', '::1', 1589100203, '__ci_last_regenerate|i:1589100203;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('p1p947pde05ng2lkdqgf4nd2803jt7km', '::1', 1589085285, '__ci_last_regenerate|i:1589085285;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('p1qo140h5mdm8t7eukadm9fkok04t2j8', '::1', 1589085630, '__ci_last_regenerate|i:1589085630;nik|s:1:\"2\";level|s:5:\"Clerk\";'),
('pav01u4c1aum80p13hadpqatj60jti0h', '::1', 1589392613, '__ci_last_regenerate|i:1589392606;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('peuif75s4bc95a3f7nqdtkl7qjmg60pj', '::1', 1589040259, '__ci_last_regenerate|i:1589040259;nik|s:3:\"789\";level|s:5:\"Clerk\";'),
('phiu7slaric9qs0gm71ekghabfirleaa', '::1', 1588928307, '__ci_last_regenerate|i:1588928307;'),
('q7p00eeus81vdeud4epigpso3dqc70aa', '::1', 1589035618, '__ci_last_regenerate|i:1589035618;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('r2ca77qsu6b76h4cqthaohvpqaem8bkh', '::1', 1589050425, '__ci_last_regenerate|i:1589050425;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('rkn74hpn7d3hs66o3tnetm5no84cge9k', '::1', 1589052437, '__ci_last_regenerate|i:1589052437;nik|s:1:\"1\";level|N;'),
('rueqrgvnoqvinu4okie1o102o95hft5m', '::1', 1589042511, '__ci_last_regenerate|i:1589042511;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('s0obc2kdhka8ft4c3cro4sbpu8c02ted', '::1', 1588493902, '__ci_last_regenerate|i:1588493902;'),
('s5cqcknqat9tk995fvump2e9itp96d7o', '::1', 1589044236, '__ci_last_regenerate|i:1589044236;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('shavbs9e3f81g2kmmfekfhjrjj388260', '::1', 1589045030, '__ci_last_regenerate|i:1589045030;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('sqm3pl7us0b9s72id20t7uhi022ela70', '::1', 1589046104, '__ci_last_regenerate|i:1589046104;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('t32ee8h92hgjpo6migtjbcep24dm18i6', '::1', 1589055093, '__ci_last_regenerate|i:1589055093;nik|s:1:\"1\";level|N;'),
('tcsjs2jmd13hbjvmrhsvdammvflcn2di', '::1', 1588962617, '__ci_last_regenerate|i:1588962617;nik|s:3:\"789\";level|s:5:\"Clerk\";'),
('u5ohmi4s2r772n356r28gslek4apcbfl', '::1', 1589049690, '__ci_last_regenerate|i:1589049690;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('v51fcokr9b4bp3lqm408hlkucgoldvpi', '::1', 1588741782, '__ci_last_regenerate|i:1588741592;'),
('vg0oss5j0bcsmkdi5erp9ifhcbjh6ovp', '::1', 1589049367, '__ci_last_regenerate|i:1589049367;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('vmdhr39q2tjgeclrelobr02ba30i4v06', '::1', 1588868299, '__ci_last_regenerate|i:1588868225;'),
('vnblog9mhqqhku42m94n60fb3r48j63h', '::1', 1589036137, '__ci_last_regenerate|i:1589036137;nik|s:3:\"123\";level|s:10:\"Supervisor\";'),
('vpog7a3epmogr5sd9bfurjsncicli2tj', '::1', 1588953991, '__ci_last_regenerate|i:1588953991;nik|s:3:\"123\";'),
('vrj93j3voknj5qb93r73hdpjr2q30hhh', '::1', 1589386718, '__ci_last_regenerate|i:1589386643;nik|s:1:\"1\";level|s:10:\"Supervisor\";'),
('vteptdquuhj4i4olg4l22q2u1dikkt8j', '::1', 1589049996, '__ci_last_regenerate|i:1589049996;nik|s:3:\"123\";level|s:10:\"Supervisor\";');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(5);

-- --------------------------------------------------------

--
-- Table structure for table `r_toko`
--

CREATE TABLE `r_toko` (
  `kode_toko` varchar(9) NOT NULL,
  `nama_toko` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `r_toko`
--

INSERT INTO `r_toko` (`kode_toko`, `nama_toko`) VALUES
('0001', 'FMI CIBUBUR'),
('0005', 'FMI THAMRIN'),
('0014', 'FMI PTC'),
('0029', 'FMK SENO BHAKTI'),
('0030', 'FMK TELUKJAMBE'),
('0031', 'FMK TOYO PLANT3 KARAWANG'),
('0033', 'FMK TOYO SUNTER 1'),
('0034', 'FMK TOYO PLANT1 KARAWANG'),
('0035', 'FMS BIDAKARA1'),
('0036', 'FMS SUMMITMAS 2'),
('0037', 'FMS MENARA MULIA'),
('0039', 'FMS WISMA KEIAI'),
('0045', 'FMS TAMAN RASUNA'),
('0046', 'FMS CBD PLUIT'),
('0048', 'FMS MENARA PRIMA'),
('0049', 'FMS SEASON CITY'),
('0050', 'FMS PONDOK INDAH GOLF'),
('0051', 'FMK TOYO SUNTER HO'),
('0052', 'FMS LANDMARK CENTRE'),
('0053', 'FMS BEJ'),
('0054', 'FMS THE CAPITAL RESIDENCE'),
('0055', 'FMK TOYO SUNTER 2'),
('0057', 'FMS GRAHA NIAGA'),
('0058', 'FMS WTC 2'),
('0059', 'FMS TEMPO SCAN TOWER'),
('0060', 'FMS PATRA JASA'),
('0063', 'FMS MENARA KARYA'),
('0064', 'FMS MENTENG SQUARE'),
('0065', 'FMS MENARA BATAVIA'),
('0066', 'FMS MIDPLAZA'),
('0067', 'FMS GRIYA NIAGA'),
('0068', 'FMK KIAT EKA SARI'),
('0070', 'FMS RATU PRABU 2'),
('0071', 'FMS ANZ TOWER'),
('0074', 'FMS BIDAKARA 2'),
('0075', 'FMS OASIS MITRA APARTEMENT'),
('0076', 'FMS THE EAST'),
('0077', 'FMS APT MARGONDA 2'),
('0079', 'FMS APT SEMANGGI'),
('0080', 'FMS MENARA KEBON JERUK'),
('0084', 'FMS FORMULE 1 CIKINI'),
('0085', 'FMS WISMA BNI 46'),
('0086', 'FMK INDONESIA CHEMI CON'),
('0090', 'FMS RS MEDIKA BSD'),
('0091', 'FMS THE PAKUBUWONO VIEW'),
('0093', 'FMI TELKOM LANDMARK'),
('0094', 'FMK CHANDRA ASRI'),
('0096', 'FMK ADM SUNTER HEAD OFFICE (HO)'),
('0097', 'FMK ADM KARAWANG CASTING P3'),
('0098', 'FMK ADM SUNTER STAMPING P1'),
('0099', 'FMK ADM KARAWANG ENGINE P2'),
('0101', 'FMK ADM KARAWANG ASSEMBLY P5'),
('0102', 'FMI MENARA STANDARD CHARTERED'),
('0103', 'FME LTC - Glodok'),
('0116', 'JASA MARGA'),
('0117', 'FMI SOPO DEL OFFICE TOWER'),
('0118', 'FMI CENTENNIAL TOWER'),
('0119', 'FMI ALAMANDA TOWER'),
('0120', 'FMI KUNINGAN PLAZA'),
('0121', 'FMK ADM PART CENTER (CIBITUNG)'),
('0123', 'FMI SINARMAS MSIG TOWER'),
('0124', 'FMI IFC 2'),
('0125', 'FMI GRAN RUBINA BUSINESS PARK'),
('0126', 'FMI 18 OFFICE PARK'),
('0127', 'FMI CIPUTRA PURI TRISULA'),
('0129', 'FMI RDTX TOWER'),
('0132', 'FMI AKR TOWER'),
('0133', 'FMI MENARA IMPERIUM'),
('0134', 'FMI WISMA GKBI'),
('0136', 'FMI CAPITAL PLACE'),
('0137', 'FMI MENARA GLOBAL'),
('0138', 'FMI SMESCO TOWER'),
('0141', 'FMI SEQUIS TOWER'),
('0142', 'FMI MENARA SENTRAYA'),
('0143', 'FMI PURI MANSION'),
('0144', 'FMI GADING RIVER VIEW'),
('0145', 'FMK ERAJAYA'),
('0146', 'FMI MENARA BNI PEJOMPONGAN'),
('0147', 'FMI APARTEMENT CITY RESORT'),
('0148', 'FMI MULTIVISION TOWER'),
('0149', 'FMI INDOSURYA LIFE CENTER'),
('0151', 'FMI KUBIKAHOMY'),
('0153', 'FMI PURI MATARI 2'),
('0154', 'FMK ASTRA INTERNATIONAL'),
('0155', 'FMI MANGKULUHUR CITY'),
('0156', 'FMI BERITA SATU PLAZA'),
('0157', 'FMI HK OFFICE'),
('0158', 'FMI BRANZ BSD'),
('0159', 'FMI MRT ST BENDUNGAN HILIR'),
('0160', 'FMI MRT ST LEBAK BULUS'),
('0161', 'FMI HAMPTONS PARK'),
('0165', 'FMI KOTA AYODHYA'),
('0166', 'FMI PURI ORCHARD'),
('0167', 'FMI WISMA NUSANTARA'),
('0168', 'FMI THE TOWER'),
('0170', 'FMI FRASER TOWER'),
('0171', 'FMI ENERGY BUILDING'),
('0172', 'FMI THE MANHATTAN SQUARE'),
('0173', 'FMI LOTTE SHOPPING AVENUE'),
('0175', 'FMI LIPPO PLAZA CINERE (RS. SILOAM)'),
('0176', 'FMI THE KENSINGTON ROYAL SUITES APT'),
('0177', 'FMI BINTARO PARK VIEW APT'),
('0178', 'FMI RS CAROLUS'),
('0179', 'FMI APARTEMEN SLIPI'),
('0181', 'FMI BSD GOP (GREEN OFFICE PARK) 1'),
('0183', 'FMI CITRA LAKE SUITES APARTEMEN'),
('0186', 'FMI ASGO'),
('0187', 'FMI GOLD COAST APARTEMEN'),
('0188', 'FMI SAHID SUDIRMAN'),
('0189', 'FMI COHIVE MEGA KUNINGAN'),
('0190', 'FMI PLAZA 89'),
('0192', 'FMK PURI TELUK JAMBE 2'),
('0193', 'FMI MENARA JAMSOSTEK'),
('0194', 'FMK AHM PLANT 5'),
('0196', 'FMI WEST VISTA APARTEMEN'),
('0197', 'FMI RS ATMAJAYA'),
('0198', 'FMI CIPUTRA WORLD 2'),
('0199', 'FMK AHM PLANT 3'),
('0200', 'FMI RNI WASKITA'),
('0202', 'FMI PLAZA OLEOS'),
('0204', 'FMI APT BROOKLYN'),
('0205', 'FMI MARRAKASH SQUARE (PONDOK UNGU)'),
('0207', 'FMI TAZZA SQUARE (CIKARANG)'),
('0210', 'FMI GRAHA MR21.'),
('0211', 'FMI GRAND INDONESIA'),
('0212', 'FMI CIPINANG INDAH RAYA'),
('0215', 'FMI APT PEARL GARDEN'),
('61', 'FMS THE SUMMIT');

-- --------------------------------------------------------

--
-- Table structure for table `t_claim_bensin`
--

CREATE TABLE `t_claim_bensin` (
  `id_claim_bensin` varchar(12) NOT NULL,
  `claim_by` varchar(12) DEFAULT NULL,
  `tanggal_pengisian` date DEFAULT NULL,
  `kode_spbu` varchar(15) DEFAULT NULL,
  `km_awal` int(7) DEFAULT NULL,
  `km_akhir` int(7) DEFAULT NULL,
  `liter` float DEFAULT NULL,
  `rupiah` varchar(12) DEFAULT NULL,
  `gambar_struk` varchar(150) DEFAULT NULL,
  `status_claim` int(3) DEFAULT '3',
  `keterangan_reject` varchar(30) DEFAULT NULL,
  `tanggal_claim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_claim_bensin`
--

INSERT INTO `t_claim_bensin` (`id_claim_bensin`, `claim_by`, `tanggal_pengisian`, `kode_spbu`, `km_awal`, `km_akhir`, `liter`, `rupiah`, `gambar_struk`, `status_claim`, `keterangan_reject`, `tanggal_claim`) VALUES
('KBNSNBC1F3A1', '3', '2020-05-13', 'JSKD.W4TT', 1500, 1600, 2, '20000', 'assets/images/claim/Klaim-Bensin-2020-05-14-123014-5ebc2ebc1a9cb.jpeg', 4, 'oleh Supervisor: ', '2020-05-13 17:30:36');

-- --------------------------------------------------------

--
-- Table structure for table `t_claim_parkir`
--

CREATE TABLE `t_claim_parkir` (
  `id_claim_parkir` varchar(12) NOT NULL,
  `claim_by` varchar(32) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tanggal_parkir` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `rupiah` decimal(11,0) DEFAULT NULL,
  `gambar_struk` varchar(150) DEFAULT NULL,
  `status_claim` int(3) NOT NULL DEFAULT '3',
  `tanggal_claim` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_users_detail`
--

CREATE TABLE `t_users_detail` (
  `nik` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_plat` varchar(30) DEFAULT NULL,
  `divisi` varchar(30) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `level` varchar(15) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_users_detail`
--

INSERT INTO `t_users_detail` (`nik`, `nama_lengkap`, `no_plat`, `divisi`, `jabatan`, `level`, `password`, `active`, `joined`) VALUES
('1', 'ADE FATHUDIN', '2013035340', 'PI', 'Supervisor', 'Supervisor', '202cb962ac59075b964b07152d234b70', 1, '2020-05-09 19:04:47'),
('2', 'HANUNG TIADI', '0037207', 'Finance', 'Supervisor', 'Finance', '202cb962ac59075b964b07152d234b70', 1, '2020-05-22 15:08:09'),
('3', 'ABDULLAH FAQIH', '0037207', 'PI', 'Clerk', 'Clerk', '202cb962ac59075b964b07152d234b70', 1, '2020-05-13 17:30:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_toko`
--
ALTER TABLE `r_toko`
  ADD PRIMARY KEY (`kode_toko`);

--
-- Indexes for table `t_claim_bensin`
--
ALTER TABLE `t_claim_bensin`
  ADD PRIMARY KEY (`id_claim_bensin`);

--
-- Indexes for table `t_claim_parkir`
--
ALTER TABLE `t_claim_parkir`
  ADD PRIMARY KEY (`id_claim_parkir`);

--
-- Indexes for table `t_users_detail`
--
ALTER TABLE `t_users_detail`
  ADD PRIMARY KEY (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
