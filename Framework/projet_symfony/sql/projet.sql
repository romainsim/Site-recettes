-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: projet
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dessert`
--

DROP TABLE IF EXISTS `dessert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dessert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `recette` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempspreparation` int(11) DEFAULT NULL,
  `tempscuisson` int(11) DEFAULT NULL,
  `imgrecette` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dessert`
--

LOCK TABLES `dessert` WRITE;
/*!40000 ALTER TABLE `dessert` DISABLE KEYS */;
INSERT INTO `dessert` VALUES (1,'Gâteau au chocolat fondant','Recette rapide d\'un gâteau','- 200g de chocolat noir\r\n- 100g de beuure\r\n- 3 oeufs\r\n- 50g de farine\r\n- 100g de sucre','1/ Préchauffez votre four à 180°C (thermostat 6). Dans une casserole, faites fondre le chocolat et le beurre coupé en morceaux à feu très doux.\r\n    \r\n2/ Dans un saladier, ajoutez le sucre, les oeufs, la farine. Mélangez.\r\n    \r\n3/ Ajoutez le mélange chocolat/beurre. Mélangez bien.\r\n    \r\n4/ Beurrez et farinez votre moule puis y versez la pâte à gâteau.\r\n    \r\n5/ Faites cuire au four environ 20 minutes.\r\n    \r\n6/ A la sortie du four le gâteau ne paraît pas assez cuit. C\'est normal, laissez-le refroidir puis démoulez- le.\r\n',10,30,'dessert_1.jpg'),(2,'Crumble aux pommes','Dessert fruité et croquant!','- 6 pommes\r\n- 150g de cassonade\r\n- 150g de farine\r\n- 125g de beurre doux\r\n- 1 petite cuillère de cannelle en poudre\r\n- 1 sachet de sucre vanillé\r\n- Citron','1/ Préchauffer le four à 210°C (thermostat 7).\r\n    \r\n2/ Peler, évider et découper les pommes en cubes grossiers, les répartir dans un plat allant au four.\r\n    \r\n3/ Les arroser de jus du citron et les saupoudrer de cannelle et de sucre vanillé.\r\n    \r\n4/ Dans un saladier, mélanger la farine et la cassonade. Puis ajouter le beurre en petits cubes et mélanger à la main de façon à former une pâte grumeleuse.\r\n    \r\n5/ Émietter cette pâte au dessus des pommes de façon à les recouvrir.\r\n    \r\n6/ Enfourner pour 30 minutes de cuisson.\r\n    \r\n7/ Servir tiède avec de la crème fouettée ou de la glace à la vanille.\r\n',25,30,'dessert_2.jpg'),(3,'Crepes','Spécialité française pour petits et grands','- 250g de farine\r\n- 4 oeufs\r\n- 1/2 litre de lait\r\n- 30g de sucre\r\n- 50g de beurre fondu','1/ Mettez la farine dans un saladier avec le sel et le sucre.\r\n\r\n2/ Faites un puits au milieu et versez-y les œufs.\r\n\r\n3/ Commencez à mélanger doucement. Quand le mélange devient épais, ajoutez le lait froid petit à petit.\r\n\r\n4/ Quand tout le lait est mélangé, la pâte doit être assez fluide. Si elle vous paraît trop épaisse, rajoutez un peu de lait. Ajoutez ensuite le beurre fondu refroidi, mélangez bien.\r\n\r\n5/ Faites cuire les crêpes dans une poêle chaude (par précaution légèrement huilée si votre poêle à crêpes n\'est pas anti-adhésive). Versez une petite louche de pâte dans la poêle, faites un mouvement de rotation pour répartir la pâte sur toute la surface. Posez sur le feu et quand le tour de la crêpe se colore en roux clair, il est temps de la retourner.\r\n\r\n6/ Laissez cuire environ une minute de ce côté et la crêpe est prête.\r\n\r\n7/ Répétez jusqu\'à épuisement de la pâte. ',10,15,'crepes.jpg'),(4,'Cookies pépites de chocolat','Cookies fondant et moelleux','- 1 oeuf - 85g de sucre - 85g de beurre - 150g de farine - 100g de pépites de chocolat - 1 sachet de sucre vanillé - 1/2 sachet de levure chimique','1/Laissez ramollir le beurre à température ambiante. Dans un saladier, malaxez-le avec le sucre.<br /><br /> 2/ Ajoutez l oeuf et éventuellement le sucre vanillé. \r\n\r\n3/ Versez progressivement la farine, la levure chimique, le sel et les pépites de chocolat. Mélangez bien. \r\n\r\n4/ Beurrez une plaque allant au four ou recouvrez-la d une plaque de silicone. À l aide de deux cuillères à soupe ou simplement avec les mains, formez des noix de pâte en les espaçant car elles s étaleront à la cuisson. \r\n\r\n5/ Faites cuire 8 à 10 minutes à 180°C soit thermostat 6. Il faut les sortir dès que les contours commencent à brunir. ',15,10,'10027543.jpg'),(5,'Canelés','Meilleure recette de canelés','- 1/2L de lait\r\n- 2 oeufs\r\n- 2 jaunes d\'oeuf\r\n- 100g de farine\r\n- 250g de sucre\r\n- 50g de beurre','1/ Mettre le lait à bouillir avec l\'extrait de vanille et le beurre. Pendant ce temps, mélanger la farine, le sucre et les œufs au fouet.\r\n\r\n2/ Ensuite, incorporer le lait bouillant en mélangeant au fouet, on doit obtenir une pâte fluide et sans grumeaux, comme une pâte à crêpes.\r\n\r\n3/ Laisser reposer une heure puis verser le rhum, bien mélanger de nouveau. Mettre le four à préchauffer à thermostat 9 (270°C) une dizaine de minutes. Remplir les alvéoles du moule en silicone, sans le beurrer, aux 2/3 (la pâte va gonfler en cuisant puis s\'abaisser ensuite).\r\n\r\n4/ Tout le secret du cannelé réside dans la cuisson : Enfourner et laisser cuire 5 minutes très précisément à thermostat 10 (300°C) puis abaisser la température à 180°C (thermostat 6) pendant une heure environ, il faut surveiller. L\'extérieur doit être marron foncé mais l\'intérieur doit rester bien moelleux. Démouler au bout de quelques minutes et poser si possible sur une grille à pâtisserie.\r\n\r\n5/ Tout est une question de préférence. Si on préfère un cannelé bien croustillant, bien grillé, on peut cuire l\'heure entière, voire 10 minutes de plus si besoin.\r\nSi on préfère, un cannelé moins grillé, plus blond, plus moelleux, on peut se contenter d\'une cinquantaine de minutes de cuisson (en plus des 5 minutes de départ).\r\n',15,65,'305933.jpg'),(6,'Cupcakes','La meilleure recette de Cupcakes','- 2 oeufs\r\n- 170g de beurre\r\n- 140g de farine\r\n- 6 c à s de lait\r\n- 100g de sucre\r\n- 150g de sucre glace','1/ Préchauffez votre four à 180°c (th 6). Mélangez le beurre et le sucre au batteur électrique, jusqu’à que la préparation blanchisse.\r\n\r\n2/ Ajoutez les œufs un à un, puis la farine en pluie, le sel et la levure chimique. Mélangez bien puis incorporez le lait et le parfum de votre choix.\r\n\r\n3/ Déposez 2 cuillères à soupe de votre pâte dans vos moules à muffins ou autre. Mettez-les au four et laissez cuire 20 min. Laissez-les refroidir une fois cuit.\r\n\r\n4/ Préparez le glaçage le temps que les cupcakes refroidissent. Avec un batteur électrique battez le beurre en crème. Lorsqu\'il est ramolli, ajoutez peu à peu le sucre et la vanille. Mélangez pendant 5 min environ, jusqu\'à avoir une crème mousseuse. Si votre mélange est trop dense ajoutez 1 ou 2 cuillères à café de lait. S\'il est trop liquide ajoutez du sucre glace pour l’épaissir.\r\n\r\n6/ Ajoutez du colorant si vous souhaitez. Une fois fois la pâte refroidie, coupez un peu le bout et glacez vos cupcakes à l\'aide d\'une poche à douille ou d\'une spatule. Décorez-les si vous le souhaitez.\r\n',30,20,'379936.jpg'),(7,'Macarons au citron','La meilleure recette de Macaron','- 3 blancs d\'oeufs (100 g)\r\n- 100 g de sucre en poudre\r\n- 20 gouttes de colorant jaune\r\n- 225 g de sucre glace\r\n- 125 g d\'amandes en poudre\r\n- 15 cl de jus de citron\r\n- 1 oeuf\r\n- 40 g de beurre\r\n','1/ La veille, séparer les blancs des jaunes, réserver les blancs au frais (et utiliser les jaunes pour des canelés par exemple).\r\n\r\n2/ Mélanger le sucre glace, la poudre d\'amande et le zeste. Le hacher très finement au robot, au hachoir ou au moulin à café... mais le plus finement possible. Ne pas hésiter à laisser tourner longtemps. Tamiser le tout, mettre de côté.\r\n\r\n3/ Monter les blancs en neige. D\'abord juste les blancs, et quand ils commencent à être mousseux, ajouter le sucre en poudre et la pincée de sel. Ensuite, ajouter quelques gouttes de citron. Les blancs sont très brillants, on doit voir la marque du fouet. Ajouter le colorant jaune à la fin.\r\n\r\n4/ Verser la poudre d\'amande et le sucre glace d\'un seul coup sur les blancs en neige. Incorporer délicatement pour ne pas faire tomber les blancs. Avec une spatule en caoutchouc, c\'est l\'idéal. C\'est le moment de remplir la poche à douille et de dresser. Recouvrir une plaque de papier sulfurisé, et former des petits tas d\'environ 3 cm de diamètre. Il vaut mieux une douille avec un gros trou lisse. Laisser poser (croûter) pendant 30 minutes à 1 heure. Je fais environ 3 plaques comme celle-ci.\r\n\r\n5/ Faire cuire 12 minutes dans un four préchauffé à 150°C. Au bout 5 minutes, on les voit commencer à monter. C\'est le moment que je préfère, c\'est là que je sais s\'ils sont réussis ou pas. Au bout de 14 minutes, la collerette est bien là, ils sont réussis.\r\n\r\n6/ Préparer enfin le lemon curd : Faire bouillir le jus de citron et le zeste. Parallèlement, mélanger l\'oeuf au sucre, puis ajouter la fécule de maïs. Verser le citron sur le mélange oeuf-sucre-fécule, mélanger et remettre le tout sur le feu jusqu\'à épaissisement. Une fois tiède, ajouter le beurre ramolli et fouetter vivement pour obtenir une pâte lisse. Ne reste plus qu\'à en mettre sur la moitié des macarons, préalablement rangés 2 par 2 suivant leur taille et à les coller ensuite.\r\n',60,14,'321508.jpg');
/*!40000 ALTER TABLE `dessert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20210321132517','2021-03-21 14:39:06',81),('DoctrineMigrations\\Version20210321132720','2021-03-21 14:39:42',74),('DoctrineMigrations\\Version20210321134112','2021-03-21 14:42:09',135),('DoctrineMigrations\\Version20210321134445','2021-03-21 14:45:15',81),('DoctrineMigrations\\Version20210323224011','2021-03-23 23:40:23',164);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entree`
--

DROP TABLE IF EXISTS `entree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `recette` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempspreparation` int(11) DEFAULT NULL,
  `tempscuisson` int(11) DEFAULT NULL,
  `imgrecette` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entree`
--

LOCK TABLES `entree` WRITE;
/*!40000 ALTER TABLE `entree` DISABLE KEYS */;
INSERT INTO `entree` VALUES (1,'Blinis faciles maisons','Délicieuse recette de blinis maison!','- 1 yaourt blanc\r\n- 1 oeuf\r\n- 1 pot de yaourt de farine\r\n- 1/2 sachet de levure\r\n- 1 pincée de sel','1/ Mélanger tous les ingrédients ensemble\r\n    \r\n2/ Puis laisser reposer la pâte pendant 1 heure au réfrigérateur.\r\n    \r\n3/ Cuire dans un poêle à blinis ou sur une poêle antiadhésive.\r\n    \r\n4/ Lorsqu\'ils font des trous, les retourner.\r\n    \r\n5/ Servir de suite ou réchauffer avant de passer à table.\r\n',5,20,'entree_1.jpg'),(2,'Velouté de champignons','Velouté onctueux qui réchauffe','- 3 cuillères à soupe de beurre\r\n- 1 oignon\r\n- 250g de champignon de Paris\r\n- 2 cuillères à soupe de farine\r\n- 250ml de bouillon\r\n- 500ml de lait\r\n- 1 citron\r\n- 2 cuillères à soupe de crème fraîche\r\n- 1 cuillère à soupe de persil haché\r\n- Sel\r\n- Poivre','1/ Faire fondre dans une casserole 3 cuillères à soupe de beurre.\r\n    \r\n2/ Ajouter un petit oignon haché et les champignons de Paris coupés en tout petits morceaux.\r\n    \r\n3/ Saler, poivrer, saupoudrer d’une cuillère à soupe de persil haché.\r\n    \r\n4/ Remuer bien les champignons dans le beurre chaud. Couvrir et laisser cuire à feu doux 1/4 heure.\r\n    \r\n5/ Ajouter alors 2 cuillères à soupe de farine en remuant sans cesse. Ajouter 1/4 litre de bouillon (ou d’eau) et 1/2 litre de lait.\r\n    \r\n6/ Faire cuire à feu doux en remuant de temps en temps.\r\n    \r\n7/ Lorsque le potage commence à bouillir, baisser le feu et laisser cuire à découvert encore 1/4 d’heure.\r\n    \r\n8/ Quelques minutes avant de servir ajouter le jus d’un citron puis 2 cuillères à soupe de crème fraîche.\r\n',10,40,'entree_2.jpg'),(3,'Millefeuille de la mer','Délicieuse et vite préparée!','- 2 boites de crabe\r\n- 8 tranches de saumon fumé\r\n- 4 petites échalottes\r\n- 1 bouquet de persil plat et corriandre\r\n- 1 botte de ciboulette\r\n','1/ Egouttez le crabe. Ouvrez une boîte vide des deux côtés afin de disposer d\'un cercle de 8 cm de diamètre. A l\'aide de ce cercle, découpez deux ronds dans chaque tranche de saumon.\r\n\r\n2/ Récupérez les chutes et hachez-les. Pelez et hachez finement les échalotes. Ciselez les fines herbes.\r\n\r\n3/ Effilochez la chair de crabe en éliminant les cartilages. Incorporez-lui le saumon haché, les échalotes, les fines herbes et l\'huile. Poivrez.\r\n\r\n4/ Pour monter les millefeuilles, déposez un rond de saumon au centre des assiettes, posez la boîte évidée dessus, garnissez de crabe puis d\'un autre rond de saumon. Recommencez deux fois. Retirez délicatement la boîte. Gardez au réfrigérateur et servez frais. ',20,0,'316071.jpg'),(4,'Foie gras maison','Rapide et facile!','- 600g d\'un foie gras d\'oie\r\n- Sel\r\n- Poivre','1/ Laissez-le foie 1 heure à température ambiante, puis écartez les 2 lobes. A l\'aide d\'une fourchette, retirez les veines et grattez les traces de sang. N\'hésitez pas à abîmer le foie, il se reconstituera à la cuisson. Rassemblez les morceaux, salez (12 g par kilo de foie), poivrez (3 g/kilo) et placez-les dans un saladier recouvert de papier film que vous laisserez reposer au réfrigérateur toute une nuit. En ajoutant 4 cl de pineau par kilo, vous pouvez également aromatiser votre foie gras.\r\n\r\n2/ Sur un plan de travail, étalez 2 feuilles de papier film (30x45 cm), l\'une sur l\'autre. Coupez le foie en 2 morceaux dans le sens de la longueur. Roulez une moitié dans une première couche de film en expulsant l\'air au maximum. Serrez bien en donnant la forme d\'un cylindre et faites un nœud à chaque extrémité, puis découpez le surplus. Roulez de nouveau ce ballotin dans la seconde couche de film. Répétez l\'opération pour la seconde moitié de foie.\r\n\r\n3/ Une fois bien emballés, plongez les ballotins dans une eau à 80°C pour les faire cuire 10 minutes pour un foie mi-cuit, 15 minutes pour un foie cuit. Il est important de constamment surveiller la température qui pourra osciller entre 78 et 82°C. Pour un meilleur contrôle de la température, ne remplissez pas trop la casserole, chauffez l\'eau à feu doux et versez un peu d\'eau froide lorsque le mercure s\'affole.\r\n\r\n4/ Sortez les ballotins à l\'aide d\'une écumoire, et plongez-les dans un saladier d\'eau et de glaçons pour stopper la cuisson. Laissez-les 30 minutes. Placez-les ensuite sur une assiette et laissez-les reposer au réfrigérateur pendant une longue nuit.\r\n',40,15,'10019140.jpg'),(5,'Cake jambon olive','Un cake salé parfait!','- 250g de farine\r\n- 250g de jambon fumé\r\n- 150g de gruyère rapé\r\n- 100g d\'olive vertes dénoyautées\r\n- 4 oeufs\r\n- 20g de beurre','\r\n1/ Préchauffez le four à 180°C (thermostat 6). Coupez le jambon en dés.\r\n\r\n2/ Versez dans un saladier la farine et la levure tamisées. Ajoutez les oeufs et l\'huile d\'olive. Continuez à travailler la pâte jusqu\'à l\'obtention d\'une crème lisse.\r\n\r\n3/ Ajoutez les dés de jambon à cette pâte, les olives, le gruyère et une bonne pincée de poivre. Mélangez le tout.\r\n\r\n4/ Beurrez un moule à cake, versez-y la préparation et laissez cuire 45 minutes.\r\n\r\n5/ Laissez refroidir avant de le servir.\r\n',30,45,'10025556.jpg'),(6,'Carpaccio de Saint-Jacques','Unique et savoureux!','- 4 belles Saint-Jacques sans le corail, très fraîches\r\n- 1 mangue thaïe, mûre à point\r\n- Huile de mandarine (ou autre)\r\n- Vinaigre balsamique à la framboise','1/ Commencer par bien rincer les saint-jacques et les essuyer dans du papier absorbant. Ce n’est pas toujours facile de trancher les saint-jacques en tranches fines. Petit conseil : les laisser 10-15 minutes au congélateur pour les faire durcir un tout petit peu, la coupe n’en sera que plus précise. À l’aide d’un bon couteau (et pas d’une mandoline) trancher de fines tranches de saint-jacques, puis les badigeonner délicatement d’huile parfumée sur chaque face.\r\n\r\n2/ Découper à l’aide d’un emporte-pièce quelques rondelles de mangues, les détailler ensuite en fines tranches.\r\n\r\n3/ Dans une petite casserole, faire un caramel de vinaigre balsamique en ajoutant 1 à 2 cuillères à soupe de sucre à un peu de vinaigre balsamique de framboise. Laisser évaporer brièvement pour obtenir un caramel encore liquide.\r\n\r\n4/ Dresser l’assiette en alternant la saint-jacques avec la mangue, saler avec une pointe de fleur de sel et un petit filet de caramel, il ne reste plus qu’à déguster sur le champ !\r\n',15,10,'359685.jpg'),(7,'Bricks à la viande','Douceurs chaudes','- 200g de viande hachée\r\n- Menthe en feuille\r\n- 1 grosse pomme de terre\r\n- 1 paquet de feuilles de bricks\r\n- 1 oeuf\r\n- Cumin et canelle','1/ Hacher l\'oignon, le faire revenir pendant 5 minutes dans une poêle avec un filet d\'huile. Ajouter la viande puis l\'assaisonnement. Faire cuire pendant 5 à 8 minutes. Mettre le tout dans un saladier avec la pomme de terre (préalablement cuite à l\'eau) en petits cubes. Hacher la menthe et l\'incorporer au tout ainsi que l\'oeuf.\r\n\r\n2/ Couper une feuille de brick en deux. La plier en rapportant le bord rond sur l\'autre. Puis mettre une cuillère à soupe de farce sur le bord gauche. Ensuite prendre le coin gauche le ramener en haut, ainsi le triangle formé le rapporter vers le bas, puis vers le haut. Couper si il y a surplus de feuille. Les faire cuire dans un fond d\'huile chaude 2 à 3 minutes de chaque côté. Déguster aussitôt.',25,10,'10031750.jpg');
/*!40000 ALTER TABLE `entree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membre`
--

DROP TABLE IF EXISTS `membre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membre`
--

LOCK TABLES `membre` WRITE;
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` VALUES (2,'SIMON','Romain','romain.simon@vivaldi.net','$argon2id$v=19$m=65536,t=4,p=1$6NFbil7InHetLbQdbzzXJA$wqY54Voyu/10H2UxinLgCM54rFq/4fuGpsl6w2edXvY',674159638,0),(3,'admin','admin','admin@admin.com','$argon2id$v=19$m=65536,t=4,p=1$qIVQTE8ATWc53VrAeEys+A$ibdu2CqKGPjttNXmAyUCkKule7OrNqRNNFtgr5/L1gU',666666666,1);
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plat`
--

DROP TABLE IF EXISTS `plat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `recette` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempspreparation` int(11) DEFAULT NULL,
  `tempscuisson` int(11) DEFAULT NULL,
  `imgrecette` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plat`
--

LOCK TABLES `plat` WRITE;
/*!40000 ALTER TABLE `plat` DISABLE KEYS */;
INSERT INTO `plat` VALUES (1,'Lasagnes à la bolognaise','Délicieuses recettes venant d\'Italie','- 1 paquet de pâtes de lasagnes\r\n- 3 oignons jaunes\r\n- 2 gousses d\'ail\r\n- 1 branche de céleri\r\n- 1 carotte\r\n- 600g de viande de boeuf hachée\r\n- 800g de purée de tomate\r\n- 15cl d\'eau\r\n- 20cl de vin rouge\r\n- 2 feuilles de laurier\r\n- Basilic\r\n- 70g de fromage râpé\r\n','1/ Faire revenir gousses hachées d\'ail et les oignons émincés dans un peu d\'huile d\'olive.\r\n    \r\n2/ Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.\r\n    \r\n3/ Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu\'à évaporation.\r\n    \r\n4/ Ajouter la purée de tomates, l\'eau et les herbes. Saler, poivrer, puis laisser mijoter à feu doux 45 minutes.\r\n    \r\n5/ Préparer la béchamel : faire fondre le beurre.\r\n    \r\n6/ Hors du feu, ajouter la farine d\'un coup.\r\n    \r\n7/ Remettre sur le feu et remuer avec un fouet jusqu\'à l\'obtention d\'un mélange bien lisse.\r\n    \r\n8/ Ajouter le lait peu à peu.\r\n    \r\n9/ Remuer sans cesse, jusqu\'à ce que le mélange s\'épaississe.\r\n    \r\n10/ Saler, poivrer. Laisser cuire environ 5 minutes, à feu très doux, en remuant. Réserver.\r\n    \r\n11/ Préchauffer le four à 200°C (thermostat 6-7). Huiler le plat à lasagnes. Poser une fine couche de béchamel puis des feuilles de lasagnes, de la bolognaise, de la béchamel et du fromage râpé. Répéter l\'opération 3 fois de suite.\r\n    \r\n12/ Sur la dernière couche de lasagnes, ne mettre que de la béchamel et recouvrir de fromage râpé. Parsemer quelques noisettes de beurre.\r\n    \r\n13/ Enfourner pour environ 25 minutes de cuisson.\r\n',30,95,'plat_1.jpg'),(2,'Boeuf bourguignon rapide','Préparation rapide d\'un classique français','- 800g de boeuf bourguignon\r\n- 100g de lardons\r\n- 50g de beurre\r\n- 75cl de vin rouge\r\n- 2 oignons jaunes\r\n- 1 gousse d\'ail\r\n- 2 cuillères à soupe de farine\r\n- 1 bouquet garni\r\n- 250g de champignon de Paris','1/ Hacher les oignons. Peler l\'ail.\r\n    \r\n2/ Dans une cocotte minute, faire roussir la viande et les lardons dans l’huile ou le beurre.\r\n    \r\n3/ Ajouter les oignons, les champignons égouttés et saupoudrer de fariner. Mélanger et laisser dorer un instant.\r\n    \r\n4/ Mouiller avec le vin rouge qui doit recouvrir la viande.\r\n    \r\n5/ Saler et poivrer.\r\n    \r\n6/ Ajouter l’ail et le bouquet garni.\r\n    \r\n7/ Fermer la cocotte minute.\r\n    \r\n8/ Laisser cuire doucement 60 min à partir de la mise en rotation de la soupape.\r\n',10,60,'plat_2.jpg'),(5,'Noix de Saint-Jacques','A cuisiner pour toute la famille','- 400g de noix de saint-jacques\r\n- 100g de crevette\r\n- 20g de beurre\r\n- 1 pomme\r\n- 1 échalote\r\n- 25cl de crème liquide\r\n- 5cl de vin blanc\r\n- 1 c à c de curry\r\n','1/ Maintenir des assiettes au chaud en les glissant dans le four à basse température. Peler, épépiner la pomme, la couper en petits cubes. Peler et émincer finement l\'échalote.\r\n\r\n2/ Dans une poêle, faire fondre une noisette de beurre, y dorer pendant une minute les noix de saint-jacques en les retournant. Les retirer de la poêle et réserver sur une assiette.\r\n\r\n3/ Faire fondre les 20 g de beurre dans une autre poêle, y dorer l\'échalote, ajouter les dés de pomme et les petites crevettes. Cuire sur feu moyen pendant 4 à 5 minutes environ. Arroser avec le vin blanc sec, laisser réduire un petit peu, ajouter la crème liquide, saler, poivrer et ajouter le curry en poudre.\r\n\r\n4/ Ajouter les noix de saint-jacques dans la crème au curry et laisser mijoter 4 minutes environ.\r\n\r\n5/ Servir sans attendre sur les assiettes chaudes.\r\n',10,10,'331932.jpg'),(6,'Hachis Parmentier','Facile et rapide à préparer','- 1kg de pomme de terre\r\n- 20cl de lait\r\n- 75g de beurre\r\n- 100g de gruyère rapée\r\n- 500g de boeuf haché\r\n- 1 oignon, ail & échalote\r\n- 1 carotte','1/ Hacher l\'oignon, l\'ail et l’échalote. éplucher et couper la carotte en brunoise très fine. Éplucher les pommes de terre et les couper en petits morceaux.\r\n\r\n2/ Faire cuire les pommes de terre à l\'eau salée ou du lait (attention à surveiller car le lait risque de déborder quand il bout) environ 30 minutes.\r\n    \r\n3/ Faire revenir 1 minute les carottes dans le beurre puis ajouter l\'oignon, l\'ail et l’échalote. Laisser encore 1 minute.\r\n    \r\n4/ Rajouter la viande. Saler poivrer et laisser cuire 10 minutes en remuant.\r\n\r\n5/ Passer les pommes de terre au moulin à légumes ou au presse purée et y ajouter le beurre, le lait, la crème et bien saler. Mélanger rapidement.\r\n\r\n6/ Disposer la viande dans un plat à gratin et recouvrir de purée. Terminer avec le fromage. Passer au four très chaud 10 minutes et 2 minutes sous le gril.\r\n',10,60,'10002140.jpg'),(7,'Porc au caramel','Plat très parfumé','- 1,5 kg de porc\r\n- 5 c à s de sauce soja\r\n- 1 c à s de 4 épices et gingembre\r\n- 2 cubes de bouillon de volaille\r\n- 1/2L d\'eau\r\n- 25g de sucre\r\n- 600g de riz thai\r\n- 1/2 ananas','1/ Préparez tous les ingrédients.\r\n    \r\n2/ Découpez l\'échine en bouchées. Faites-les revenir 5 minutes dans une cocotte à fond épais avec un peu d\'huile. Dès qu\'elles sont colorées, retirez-les. Elles doivent rester saignantes.\r\n    \r\n3/ Préparez ensuite le bouillon dans un récipient à part, délayez les cubes de bouillon de poule dans ½ litre d\'eau chaude en les écrasant. Puis rajoutez le quatre épices, le gingembre et la sauce soja. Mélangez le tout et gardez le bouillon pour plus tard.\r\n    \r\n4/ Lavez votre cocotte qui a servi à faire revenir la viande, afin d\'y préparer votre caramel avec les 25 morceaux de sucre et 5 cl d\'eau. Dès que le caramel est bien roux, jetez-y d\'un seul coup le bouillon (attention aux éclaboussures). Le caramel va se durcir rapidement, vous devez continuer à tourner avec une cuillère en bois pour le diluer petit à petit dans le bouillon.\r\n    \r\n5/ Dès que le caramel s\'est bien dissous au bouillon, plongez-y votre viande. Le bouillon doit recouvrir environ la viande. Faites ensuite bouillir à feu vif en remuant votre viande pour ne pas qu\'elle accroche. Le plat est terminé au moment où l\'eau s\'est évaporée pour laisser place à un sirop caramélisé épicé qui se mélangera à vos morceaux de viande. Il est important de garder un feu très vif pour faire évaporer rapidement l\'eau. Car s\'il est trop faible, l\'eau mettra plus longtemps à s\'évaporer et la viande sera trop cuite, elle finira par se détacher.\r\n\r\n6/ Pour l\'accompagnement faites un riz à la créole dans une casserole d\'eau. Essorez-le et mélangez-y à la dernière minute les morceaux d\'ananas.\r\n',10,40,'310908.jpg'),(8,'Blanquette de veau','La véritable blanquette','\r\n    - 1.5 kg de sauté ou d\'épaule de veau coupés en morceaux de 70 g environ\r\n    une dizaine d\'oignons grelots\r\n    - 500 g de champignons de Paris frais\r\n    - le jus d\'un citron\r\n    - 2 cuillères à soupe de sucre\r\n    - 70 g (+ quelques noix) de beurre\r\n    - 1 jaune d\'oeuf\r\n    - 70 g de farine\r\n    - 2 cuillères à soupe de crème fraîche\r\n    - sel, poivre\r\n    Pour le bouillon :\r\n    - 1 gros oignon piqué de 4 clous de girofle\r\n    - 4 gousses d\'ail\r\n    - 2 carottes\r\n    - 1 blanc de poireau\r\n    - 1 branche de céleri\r\n    - 1 bouquet garni avec thym, laurier, persil\r\n    - 1 bouillon cube de légumes\r\n    - 2 cuillères à soupe de gros sel\r\n','1/ Disposez les morceaux de viande dans une casserole d\'eau froide et portez à ébullition pendant 1 minute pour pocher la viande et la débarrasser de ses impuretés et de son amidon.\r\n    \r\n2/ Égouttez la viande et placez-la dans une casserole avec 2 carottes, 1 gros oignon piqué de 4 clous de girofle, 4 gousses d\'ail, 1 blanc de poireau, 1 branche de céleri, 1 bouquet garni avec thym, laurier, persil, 1 bouillon cube de légumes et 2 cuillères à soupe de gros sel. Couvrez d\'eau et portez à ébullition. Réduisez ensuite le feu et laissez cuire 50 minutes environ en écumant régulièrement.\r\n    \r\n3/ Dans une casserole, faites fondre une noix de beurre, et ajoutez les oignons grelots épluchés avec un verre d\'eau et 2 cuillères à soupe de sucre. Laissez cuire à feu doux pendant 20 minutes jusqu\'à ce que le liquide se soit un peu évaporé et que les oignons soient légèrement dorés. Réservez au chaud.\r\n    \r\n4/ Dans une sauteuse, faites fondre une noix de beurre pour y faire revenir les champignons pendant 5 à 10 minutes avec un peu d\'eau et le jus de citron. Salez et réservez au chaud.\r\n\r\n5/ Quand la viande est cuite, réservez-la au chaud et récupérez le bouillon en le passant à travers un chinois ou une passoire. Faites fondre 70 g de beurre à feu doux et ajoutez la même quantité de farine pour faire un roux. Mélangez bien jusqu\'à ce le beurre soit absorbé et que le roux colore légèrement. Ajoutez en 3 ou 4 fois le bouillon en mélangeant au fouet jusqu\'aux premiers bouillons. Ajoutez alors la crème mélangée au jaune d\'oeuf, et fouettez vivement. Rectifiez l\'assaisonnement.\r\n',25,90,'321062.jpg'),(9,'Croque-monsieur','Parfaite pour les gourmands','- 4 tranches de pain de mie\r\n- 50g de gruyère rapé\r\n- 20cl de crème fraiche épaisse\r\n- 2 tranches de jambon blanc','1/ Préchauffer le four en position grill ou à la température maximale si vous n\'avez pas de grill.\r\n   \r\n2/ Superposer les tranches de jambon. Y déposer une tranche de pain mie et découper le jambon tout autour du pain. Cela permet une meilleure tenue et rend le croque plus présentable.\r\n    \r\n3/ Disposer toutes les tranches de pain de mie sur le plan de travail. Les tartiner de crème fraîche - plus ou moins selon votre goût. Saupoudrer d\'un peu de muscade râpée puis ajouter le gruyère râpé.\r\n    \r\n4/ Sur la moitié des tranches de pain de mie ainsi préparées, disposer le jambon en 1 ou 2 épaisseurs selon votre gourmandise. Ajouter un peu de crème fraîche et de gruyère râpé.\r\n    \r\n5/ Poser les tranches de pain de mie sans jambon sur les tranches avec jambon. Donner une légère pression sur le dessus pour bien les souder et ainsi leur éviter de glisser à la cuisson.\r\n\r\n6/ Enfourner en position haute environ 5 minutes si vous avez un grill, 10 minutes environ dans le cas contraire.\r\n',10,10,'316126.jpg'),(10,'Risotto aux champignons','Riz venus d\'ailleurs','- 250g de riz spécial risotto\r\n- 300g de champignon\r\n- 1 oignon\r\n- 1 gousse d\'ail\r\n- 15cl de crème fraiche\r\n- 10cl de vin blanc\r\n- 100g de parmesan','1/ Préparez les champignons. Passez-les rapidement sous un filet d\'eau, essuyez-les et détaillez-les en gros morceaux. Faites fondre une noix de beurre et faites-y revenir la gousse d\'ail émincée pendant 2 minutes. Ajoutez les champignons et laissez-les cuire environ 3 minutes en ajoutant le persil lavé et ciselé à la fin. Ajoutez 3 cuillères à soupe de vin blanc et laissez cuire 2 minutes jusqu\'à ce qu\'il réduise. Ajoutez la crème fraîche et mélangez. Salez, poivrez et réservez.\r\n\r\n2/ Faites bouillir un litre d\'eau dans lequel vous diluerez les cubes de bouillon. Dans une sauteuse, faites chauffer l\'huile d\'olive pour y faire blondir l\'oignon émincé pendant 3 minutes. Ajoutez le riz et laissez-le cuire en remuant pendant 2 minutes jusqu\'à ce qu\'il soit un peu transparent.\r\n\r\n3/ Ajoutez 10 cl de vin blanc (1/2 verre) et une fois qu\'il est absorbé par le riz, ajoutez une louche de bouillon, puis mélangez. Une fois que le bouillon est bien absorbé, ajoutez une nouvelle louche, et ainsi de suite jusqu\'à épuisement du bouillon (environ 20 bonnes minutes).\r\n\r\n4/ Ajoutez la moitié du parmesan et les champignons, attendez 2 minutes puis mélangez vivement.\r\n\r\n5/ Servez très chaud avec le reste du parmesan.',5,30,'10018964.jpg');
/*!40000 ALTER TABLE `plat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `membres_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `heure` int(11) NOT NULL,
  `personne` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42C8495571128C5C` (`membres_id`),
  CONSTRAINT `FK_42C8495571128C5C` FOREIGN KEY (`membres_id`) REFERENCES `membre` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_dessert`
--

DROP TABLE IF EXISTS `reservation_dessert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_dessert` (
  `reservation_id` int(11) NOT NULL,
  `dessert_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`dessert_id`),
  KEY `IDX_1EBCA013B83297E7` (`reservation_id`),
  KEY `IDX_1EBCA013745B52FD` (`dessert_id`),
  CONSTRAINT `FK_1EBCA013745B52FD` FOREIGN KEY (`dessert_id`) REFERENCES `dessert` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1EBCA013B83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_dessert`
--

LOCK TABLES `reservation_dessert` WRITE;
/*!40000 ALTER TABLE `reservation_dessert` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_dessert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_entree`
--

DROP TABLE IF EXISTS `reservation_entree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_entree` (
  `reservation_id` int(11) NOT NULL,
  `entree_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`entree_id`),
  KEY `IDX_11723E3DB83297E7` (`reservation_id`),
  KEY `IDX_11723E3DAF7BD910` (`entree_id`),
  CONSTRAINT `FK_11723E3DAF7BD910` FOREIGN KEY (`entree_id`) REFERENCES `entree` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_11723E3DB83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_entree`
--

LOCK TABLES `reservation_entree` WRITE;
/*!40000 ALTER TABLE `reservation_entree` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_entree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_plat`
--

DROP TABLE IF EXISTS `reservation_plat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_plat` (
  `reservation_id` int(11) NOT NULL,
  `plat_id` int(11) NOT NULL,
  PRIMARY KEY (`reservation_id`,`plat_id`),
  KEY `IDX_36016F6FB83297E7` (`reservation_id`),
  KEY `IDX_36016F6FD73DB560` (`plat_id`),
  CONSTRAINT `FK_36016F6FB83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_36016F6FD73DB560` FOREIGN KEY (`plat_id`) REFERENCES `plat` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_plat`
--

LOCK TABLES `reservation_plat` WRITE;
/*!40000 ALTER TABLE `reservation_plat` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_plat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-23 23:40:59
