<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- If IE use the latest rendering engine -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Set the page to the width of the device and set the zoon level -->
<meta name="viewport" content="width = device-width, initial-scale = 1">
<title>EpilepsyDB</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
a{
  color: dimgray;
  text-decoration: none;
}
a:hover{
  color: black;
}

.jumbotron{
    background-color:grey;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}
.navbar-header img{
  width: auto;
  height: 50px;
}
.footer {
  position: relative;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}
.container {
  color: #525252;
}
#content {
  max-width: 98%;
}
.container .text-muted {
  margin: 20px 0;
}
.image{
  max-width: 50%;
  height: auto;
}
</style>
</head>

<body>
<!-- Collapsible Navigation Bar -->
<div class="container">

<!-- .navbar-fixed-top, or .navbar-fixed-bottom can be added to keep the nav bar fixed on the screen -->
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Button that toggles the navbar on and off on small screens -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

      <!-- Hides information from screen readers -->
        <span class="sr-only"></span>

        <!-- Draws 3 bars in navbar button when in small mode -->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- You'll have to add padding in your image on the top and right of a few pixels (CSS Styling will break the navbar) -->
      <a class="pull-left" href="#"><img src="logosm.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Browse <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="browsegene.php">Browse by Genes</a></li>
                <li><a href="browsedisease.php">Browse by Diseases</a></li>
                <li><a href="browsecommobidity.php">Browse by Commobidities</a></li>
                <li class="divider"></li>
                <li><a href="browsepathway">Browse Pathways</a></li>
                <li><a href="browsepathway">Browse Functions</a></li>
            </ul>
        <li><a href="submit.php">Submit</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>

      <!-- navbar-left will move the search to the left -->
      <form class="navbar-form navbar-right" role="search"
      method="get" id="searchform" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"
          name="symbol">
        </div>
        <button type="submit" class="btn btn-default" name="submit">Go</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<br>

<div class="container">
<div class="page-header">
<h1>What Is Epilepsy</h1>
</div>
<div class="well">
<div id="content" class="container">
<h3>Definition of Epilepsy?</h3>
<p>Epilepsy is a disease of the brain defined by any of the
  following conditions:</p>
<ul>
  <li>At least two unprovoked (or reflex) seizures occurring more
    than 24 hours apart</li>
  <li>One unprovoked (or reflex) seizure and a probability of
    further seizures similar to the general recurrence risk (at least
    60%) after two unprovoked seizures, occurring over the next 10 years
  </li>
  <li>Diagnosis of an epilepsy syndrome</li>
</ul>
<p>Epilepsy is considered to be resolved for individuals who had an
  age-dependent self-limited epilepsy syndrome but who are now past the
  applicable age, or for those who have remained seizure-free for the
  last 10 years, with no seizure medication for the last 5 years.</p>
<br>
  <h3>2017 Revised Classification of Seizures</h3>
  <hr />
  <p>The basic classification is a simple version of the major categories of seizures. The new basic seizure classification is based on 3 key features.</p>
  <ol><li>Where seizures begin in the brain</li>
  <li>Level of awareness during a seizure</li>
  <li>Other features of seizures</li>
  </ol><br><h4>Defining Where Seizures Begin</h4>
  <p>The first step is to separate seizures by how they begin in the brain. The type of seizure onset is important because it affects choice of seizure medication, possibilities for epilepsy surgery, outlook, and possible causes.</p>
  <ul><li><strong>Focal seizures:</strong> Previously called partial seizures, these start in an area or network of cells on one side of the brain.</li>
  <li><strong>Generalized seizures:</strong> Previously called primary generalized, these engage or involve networks on both sides of the brain at the onset.</li>
  <li><strong>Unknown onset:</strong> If the onset of a seizure is not known, the seizure falls into the unknown onset category. Later on, the seizure type can be changed if the beginning of a person’s seizures becomes clear.</li>
  <li><strong>Focal to bilateral seizure:</strong> A seizure that starts in one side or part of the brain and spreads to both sides has been called a secondary generalized seizures. Now the term generalized refers only to the start of a seizure. The new term for secondary generalized seizure would be a focal to bilateral seizure.</li>
  </ul><br><h4>Describing Awareness</h4>
  <p>Whether a person is aware during a seizure is of practical importance because it is one of the main factors affecting a person’s safety during a seizure. Awareness is used instead of consciousness, because it is simpler to evaluate.</p>
  <ul><li><strong>Focal aware:</strong> If awareness remains intact, even if the person is unable to talk or respond during a seizure, the seizure would be called a focal aware seizure. This replaces the term simple partial.</li>
  <li><strong>Focal impaired awareness:</strong> If awareness is impaired or affected at any time during a seizure, even if a person has a vague idea of what happened, the seizure would be called focal impaired awareness. This replaces the term complex partial seizure.</li>
  <li><strong>Awareness unknown:</strong> Sometimes it’s not possible to know if a person is aware or not, for example if a person lives alone or has seizures only at night. In this situation, the awareness term may not be used or it would be described as awareness unknown.</li>
  <li><strong>Generalized seizures:</strong> These are all presumed to affect a person’s awareness or consciousness in some way. Thus no special terms are needed to describe awareness in generalized seizures.</li>
  </ul><div class="dnd-atom-wrapper type-image context-sdl_editor_representation" contenteditable="false">
  <div class="dnd-drop-wrapper"><!-- scald=22231:sdl_editor_representation {"link":"","linkTarget":""} --><div class='image'><img typeof="foaf:Image" class="img-responsive" src="ilae-2017-classification-basic.png" width="975" height="516" alt="ILAE 2017 classification of seizure types basic version" title="ILAE 2017 classification of seizure types basic version" /></div><!-- END scald=22231 --></div>
  </div><br>
  <h4>Describing Motor and Other Symptoms in Focal Seizures</h4>
  <p>Many other symptoms may occur during a seizure.</a> In this basic system, seizure behaviors are separated into groups that involve movement.</p>
  <ul><li><strong>Focal motor seizure</strong>: This means that some type of movement occurs during the event. For example twitching, jerking, or stiffening movements of a body part or automatisms (automatic movements such as licking lips, rubbing hands, walking, or running).</li>
  <li><strong>Focal non-motor seizure: </strong>This type of seizure has other symptoms that occur first, such as changes in sensation, emotions, thinking, or experiences.</li>
  <li>It is also possible for a focal aware or impaired awareness seizure to be sub-classified as motor or non-motor onset.</li>
  <li><strong>Auras:</strong> The term aura, which describes symptoms a person may feel in the beginning of a seizure, is not in the new classification. Yet people may continue to use this term. It’s important to know that in most cases, these early symptoms may be the start of a seizure.</li>
</ul><br><h4>Describing Generalized Onset Seizures</h4>
  <p>Seizures that start in both sides of the brain, called generalized onset, can be motor or non-motor.</p>
  <ul><li><strong>Generalized motor seizure</strong>: The generalized tonic-clonic seizure term is still used to describe seizures with stiffening (tonic) and jerking (clonic). This loosely corresponds to “grand mal.” Other forms of generalized motor seizures may happen. Many of these terms have not changed, and a few new terms have been added. (see image below)</li>
  <li><strong>Generalized non-motor seizure: </strong>These are primarily absence seizures, and the term corresponds to the old term "petit mal." These seizures involve brief changes in awareness, staring, and some may have automatic or repeated movements like lipsmacking.</li>
</ul><br><h4>Describing Unknown Onset Seizures</h4>
  <p>When the beginning of a seizure is not known, this classification still gives a way to describe whether the features are motor or non-motor.</p>
  <br><h4>The New Expanded Classification</h4>
  <p>The expanded classification keeps the framework of the basic classification, but adds more seizure types as subheadings. In the following image, the types of features under motor and non-motor seizures are listed for all types: focal, generalized, and unknown onset.</p>
  <div class="dnd-atom-wrapper type-image context-sdl_editor_representation" contenteditable="false">
  <div class="dnd-drop-wrapper"><!-- scald=22236:sdl_editor_representation -->
  <div class='image'><img typeof="foaf:Image" class="img-responsive" src="ilae-2017-classification-expanded.png" width="975" height="735" alt="ILAE 2017 classification of seizure types expanded version" title="ILAE 2017 classification of seizure types expanded version" /></div>
  </div><br>
  <p>Classification of a seizure type is only part of the seizure description. The work to update the seizure classification has been done by a large group of dedicated people in epilepsy over a number of years. This new sysyem will move us forward, making it easier to describe seizures and using a common language to talk about them.</p>
  <ul><li>The new classification is designed to have some flexibility. Use of other descriptive terms or even free text is encouraged.</li>
  <li>Most seizures can be classified by signs and symptoms that happen during a seizure. However, other information is useful when available. For example, phone videos, EEG (electroencephalogram) MRI (magnetic resonance imaging), and other brain imaging, blood tests, or gene tests may be helpful. For practical purposes, long descriptive terms are probably not useful for day-to-day life.</li>
  <li>This new seizure classification does not change the definition of epilepsy or epilepsy syndromes. The ILAE also has produced a new classification of the epilepsies, which we look forward to learning more about. The epilepsy classification includes the whole clinical picture, with information on seizure types, causes, EEG pattern, brain imaging, genetics, and epilepsy syndromes, such as Lennox-Gastaut syndrome and juvenile myoclonic epilepsy.</li>
  </ul><p>While the ILAE 2017 seizure classification is exciting, changing terms can be confusing and can take a lot of work. The Epilepsy Foundation is committed to helping educate people about the changes, what it means for them, and how older terminology relates to this new system.</p>
  <ul><li>Information about seizure types on epilepsy.com and in our print materials is being updated.</li>
  <li>Online forums and other ways of reaching out to everyone affected by these changes are being explored.</li></ul>

 <br>
  <h3>Epilepsy and Epilepsy Syndromes</h3>
  <hr />

  <h4 class="text-capitalize">Common Types of Epilepsy</h4>

  <p>
    <span class="text-capitalize"><strong>absence epilepsy</strong></span>  that characterized by absence seizures, usually having its onset in childhood or adolescence.
    <br><span class="text-capitalize"><strong>focal epilepsy</strong></span>  that consisting of focal seizures.
    <br><span class="text-capitalize"><strong>generalized epilepsy</strong></span>  epilepsy in which the seizures are generalized; they may have a focal onset or be generalized from the beginning.
    <br><span class="text-capitalize"><strong>grand mal epilepsy</strong></span>  a symptomatic form of epilepsy, often preceded by an aura, characterized by sudden loss of consciousness with tonic-clonic seizures.
    <br><span class="text-capitalize"><strong>jacksonian epilepsy</strong></span>  epilepsy marked by focal motor seizures with unilateral clonic movements that start in one muscle group and spread systematically to adjacent groups, reflecting the march of epileptic activity through the motor cortex.
    <br><span class="text-capitalize"><strong>juvenile myoclonic epilepsy</strong></span>  a syndrome of sudden myoclonic jerks, occurring particularly in the morning or under periods of stress or fatigue, primarily in children and adolescents.
    <br><span class="text-capitalize"><strong>Lafora's myoclonic epilepsy</strong></span>  a form characterized by attacks of intermittent or continuous clonus of muscle groups, resulting in difficulties in voluntary movement, mental deterioration, and Lafora bodies in various cells.
    <br><span class="text-capitalize"><strong>myoclonic epilepsy</strong></span>  any form of epilepsy accompanied by myoclonus.
    <br><span class="text-capitalize"><strong>petit mal epilepsy</strong></span>  absence epilepsy.
    <br><span class="text-capitalize"><strong>photic epilepsy , photogenic epilepsy reflex</strong></span> epilepsy in which seizures are induced by a flickering light.
    <br><span class="text-capitalize"><strong>posttraumatic epilepsy</strong></span>  that occurring after head injury.
    <br><span class="text-capitalize"><strong>psychomotor epilepsy</strong></span>  temporal lobe epilepsy.
    <br><span class="text-capitalize"><strong>reflex epilepsy</strong></span>  epileptic seizures occurring in response to sensory stimuli.
    <br><span class="text-capitalize"><strong>rotatory epilepsy</strong></span>  temporal lobe epilepsy in which the automatisms consist of rotating body movements.
    <br><span class="text-capitalize"><strong>sensory epilepsy</strong></span>
    1. seizures manifested by paresthesias or hallucinations of sight, smell, or taste.
    2. reflex epilepsy.
    <br><span class="text-capitalize"><strong>somatosensory epilepsy</strong></span>  sensory epilepsy with paresthesias such as burning, tingling, or numbness.
    <br><span class="text-capitalize"><strong>temporal lobe epilepsy</strong></span>  a form characterized by complex partial seizures.
    <br><span class="text-capitalize"><strong>visual epilepsy</strong></span>  sensory epilepsy in which there are visual hallucinations.</p>

  	<p>Whilst conceptualizing epilepsies by their underlying etiology is
  	very important, epilepsies may also be organized (by reliably
  	identified common clinical and electrical characteristics) into
  	epilepsy syndromes. Such syndromes have a typical age of
  	seizure onset, specific seizure types and EEG characteristics and
  	often other features which when taken together allow the specific
  	epilepsy syndrome diagnosis. The identification of an
  	epilepsy syndrome is useful as it provides information on which
  	underlying etiologies should be considered and which anti-seizure
  	medication(s) might be most useful. Several epilepsy syndromes
  	demonstrate seizure aggravation with particular anti-seizure
  	medications, which can be avoided through appropriate early diagnosis
  	of the epilepsy syndrome.</p>

    <p>When a disorder is defined by a characteristic group of features that usually occur together, it is called a syndrome. These features may include symptoms, which are problems that the person will notice. They also may include signs, which are things that the doctor will find during the examination or with laboratory tests. Doctors and other health care professionals often use syndromes to describe a person's epilepsy.</p>

    	<h4>Epilepsy syndromes are defined by a cluster of features.</h4>
    	<p>These features may include:</p>
    	<ul><li>Type or types of seizures</li>
    	<li>Age at which the seizures begin</li>
    	<li>Causes of the seizures</li>
    	<li>Whether the seizures are inherited</li>
    	<li>The part of the brain involved</li>
    	<li>Factors that provoke the seizures</li>
    	<li>How severe and how frequent the seizures are</li>
    	<li>A pattern of seizures by time of day</li>
    	<li>Certain patterns on the EEG (electroencephalogram), during and between seizures</li>
    	<li>Brain imaging findings, for example, MRI (magnetic resonance imaging) or CT (computed tomography) scan</li>
    	<li>Genetic information</li>
    	<li>Other disorders in addition to seizures</li>
    	<li>The prospects for recovery or worsening</li>
    	</ul><p>Not every syndrome will be defined by all these features,
        but most syndromes will be defined by a number of them. Classifying
        a person's epilepsy as belonging to a certain syndrome often provides
        information on what medications or other treatments will be most helpful.
        It also may help the doctor predict whether the seizures will go into
        remission (lessen or disappear).</p>
      <h4>Types of Epilespy Syndromes</h4>
        <ul>
  <li>Angelman Syndrome
  </li><li>Autosomal Dominant Nocturnal Frontal Lobe Epilepsy (ADNFLE)
  </li><li>Benign Rolandic Epilepsy
  </li><li>CDKL5 Disorder
  </li><li>Childhood Absence Epilepsy
  </li><li>Doose Syndrome
  </li><li>Dravet Syndrome
  </li><li>Early Myoclonic Encephalopathy (EME)
  </li><li>Epilepsy of Infancy with Migrating Focal Seizures
  </li><li>Epilepsy with Generalized Tonic-Clonic Seizures Alone
  </li><li>Epilepsy with Myoclonic-Absences
  </li><li>Epileptic Encephalopathy With Continuous Spike and Wave During Sleep (CSWS)
  </li><li>Frontal Lobe Epilepsy
  </li><li>Glut1 Deficiency Syndrome
  </li><li>Hypothalamic Hamartoma
  </li><li>Infantile Spasms (West's Syndrome) and Tuberous Sclerosis Complex
  </li><li>Juvenile Absence Epilepsy
  </li><li>Juvenile Myoclonic Epilepsy
  </li><li>Lafora Progressive Myoclonus Epilepsy
  </li><li>Landau-Kleffner Syndrome
  </li><li>Lennox-Gastaut Syndrome (LGS)
  </li><li>Neurocutaneous Syndromes
  </li><li>Ohtahara Syndrome
  </li><li>PCDH19 Epilepsy
  </li><li>Panayiotopoulos Syndrome
  </li><li>Progressive Myoclonic Epilepsies
  </li><li>Rasmussen's Syndrome
  </li><li>Reflex Epilepsies
  </li><li>Ring Chromosome 20 Syndrome
  </li><li>SCN8A-Related Epilepsy
  </li><li>Self-induced Photosensitive Epilepsy (Sunflower Syndrome)
  </li><li>TBCK-related ID Syndrome
  </li><li>Temporal Lobe Epilepsy</li>
</ul>

<br>
<h3 class="text-capitalize">Treatment </h3>
<hr />
  <p>
    Medical management with anticonvulsant drugs is the preferred therapy for about 95 per cent of patients with epilepsy. Surgical intervention for the remaining 5 per cent involves removal of the portion of brain tissue believed to be responsible for the seizures. Because of the dangers inherent in the surgery, this mode of therapy is reserved for those patients who do not respond to medical management and in whom the focus of seizure activity is accessible.
    The major antiepileptic drugs are phenytoin (Dilantin), which is usually the drug of choice, phenobarbital, primidone (Mysoline), carbamazepine (Tegretol) for complex partial tonic-clonic seizures, and ethosuximide (Zarontin) and clonazepam (Klonopin) for absence seizures. Valproic acid (Depakene) is also used in the treatment of absence seizures. The choice of drug and calculation of optimal dosage is very difficult and highly individualized.
    All of the anticonvulsant drugs can produce unpleasant side effects. They include gingival hyperplasia, rash, and, in the case of Dilantin, fever and leukopenia. Physical dependence can become a problem in patients taking phenobarbital or primidone, which is largely converted to phenobarbital in the blood stream. Toxic side effects are also common and include drowsiness, ataxia, nausea, sedation, and dizziness. The untoward effects of anticonvulsant drug therapy require close monitoring of the patient's response to therapy and regulation of dosage as indicated.</p>
    <br>
<h3 class="text-capitalize">Patient Care </h3>
<hr />
  <p>
Emergency care of the patient having a seizure includes clearing the immediate area to protect the patient and others, administering 100 per cent oxygen by face mask, and intravenous administration of antiepileptic medication. No one should force an object into the patient's mouth to hold it open (such as a comb, bite block, or wallet), as such objects might obstruct the airway. Do not attempt to restrain the patient, as that may cause harm to both the rescuer and the patient.
Until a diagnosis of epilepsy is confirmed, observations made before, during, and after each of the seizures can provide important information to the diagnostician. Such data also can help prepare an effective plan of care for managing the seizures once a definitive diagnosis is made.
Just before a seizure (the preictal stage) the patient may experience an abnormal somatic, visceral, or psychic sensation called an aura. The presence or absence of the aura and its nature (if it is present) should be noted and recorded. If a patient does experience a particular kind of aura just before each seizure, this information can be useful when planning care for prevention of injury. It also is helpful to note what the patient was doing just before the seizure began. If a particular emotional event or environmental or physiologic condition is found to trigger the seizures, the patient might be able to use this information to avoid or minimize the recurrence of seizures.
During the interictal stage (while the seizure is occurring) significant data include the time the seizure begins and its duration; where in the body the seizure begins and what parts of the body are involved; whether the head or eyes turn to one side and, if so, to which side; whether there is incontinence of urine or stool, bleeding, or foaming or frothing at the mouth; effects of the seizure on the vital signs; and changes in skin color or profuse perspiration.
During the postictal period the patient is assessed for lethargy, confusion, impaired speech, and reports of headache or muscle soreness.
The successful long-term management of epilepsy requires coordinated effort on the part of the patient, family, and health care professionals. Patient and family education and support are essential components of any plan of care. Epileptic patients must take their prescribed medications on their own and actively participate in the management of their illness. They and those upon whom they are dependent (as in the case of children) must know the nature of the illness, the purpose and expected effects of treatment, the side effects of the drug they are taking and its potential for interaction with other drugs that could inhibit or enhance its anticonvulsant action, and the signs and symptoms of drug intolerance that should be reported to the physician or nurse.
Education should also include information about possible seizure triggers and ways in which they might be avoided. Alcohol is especially dangerous for epileptic persons because most antiepileptic drugs are sedatives and cardiopulmonary depressants. The combination of drug and alcohol could cause loss of consciousness or even death. Moreover, alcohol acts as a seizure trigger in some persons.</p>
<br>
<h3 class="text-capitalize">References</h3>
<hr />
  <p>
Miller-Keane Encyclopedia and Dictionary of Medicine, Nursing, and Allied Health, Seventh Edition. © 2003 by Saunders, an imprint of Elsevier, Inc. All rights reserved.
Dorland's Medical Dictionary for Health Consumers. © 2007 by Saunders, an imprint of Elsevier, Inc. All rights reserved.</p>
</div>
</div>
</div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">    © Department of Neurology, The Second Affiliated Hospital of Harbin Medical University, Harbin 150081, China</p>
      </div>
    </footer>

</body></html>
