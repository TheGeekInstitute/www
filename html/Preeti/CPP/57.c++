// #include<iostream>
// using namespace std;
// class node{
//     public:
//     int data;
//     node* next;
//     node* prev;

//     node(int val){
//         data=val;
//         next=NULL;
//         prev=NULL;

//     }
// };

// void insertAtHead(node* &head, int val){
//     node* n=new node(val);
//     n->next=head;
//     if(head!=NULL){
//         head->prev=n;

//     }
//     head=n;

// }

// void insertAtTail(node* &head, int val){
//     if(head==NULL){
//         insertAtHead(head, val);
//         return;

//     }
//     node* n=new node(val);
//     node* temp=head;
//     while(temp->next!=NULL){
//        temp=temp->next;

//     }
//     temp->next=n;
//     n->prev=temp;

// }
// void display(node*head){
//     node* temp=head;
//     while(temp!=NULL){
//         cout<<temp->data<<"->";
//         temp=temp->next;

//     }
//     cout<<"NULL"<<endl;
// }


// void deleteHead(node* &head){
//     node* todelete=head;
//     head = head->next;
//     head->prev=NULL;
//     delete todelete;

// }

// void deletion(node* &head, int pos){
//     if(pos==1){
//         deleteHead(head);
//         return;

//     }
//     node* temp=head;
//     int count=1;
//     while(temp!=NULL && count!=pos){
//         temp=temp->next;
//         count++;

//     }
//     temp->prev->next=temp->next;
//     if(temp->next!=NULL){
//         temp->next->prev=temp->prev;

//     }
//     delete temp;

// }


// int main(){
//     node* head=NULL;
//     insertAtTail(head,1);
//     insertAtTail(head,2);
//     insertAtTail(head,3);
//     insertAtTail(head,4);
//     display(head);
//     insertAtHead(head,10);
//     display(head);
//     deletion(head,1);
//     display(head);




//     return 0;
// }




#include<iostream>
using namespace std;

class node{
    public:
    int data;
    node* next;
    node* prev;

    node(int val){
        data=val;
        next=NULL;
        prev=NULL;


    }
};
void insertAtHead(node* &head, int val){
    node* n=new node(val);
    n->next = head;
    if(head!=NULL){
        head->prev=n;

    }
    head=n;
}

void insertAtTail(node* &head, int val){
    if(head==NULL){
        insertAtHead(head,val);
        return;
    }
    node* n=new node(val);
    node* temp=head;
    while(temp->next!=NULL){
        temp=temp->next;

    }
    temp->next=n;
    n->prev=temp;
}

void display(node* head){
    node* temp=head;
    while(temp!=NULL){
        cout<<temp->data<<"->";
        temp=temp->next;

    }
    cout<<"NULL"<<endl;

}
void deleteHead(node* &head){
    node* todelete=head;
    head=head-> next;
    head->prev=NULL;
    delete todelete;

}

void deletion(node* &head, int pos){
    if(pos==1){
        deleteHead(head);
        return;
    }
    node* temp=head;
    int count =1;
    while(temp!=NULL && count!=pos){
        temp=temp->next;
        count++;

    }
    temp->prev->next=temp->next;
    if(temp->next!=NULL){
        temp->next->prev=temp->prev;

    }
    delete temp;

}
int main(){
    node* head=NULL;
    insertAtTail(head,1);
    insertAtTail(head,2);
    insertAtTail(head,3);
    insertAtTail(head,4);
    display(head);
    deletion(head,2);
    display(head);



    return 0;
}<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links - Anchor</title>
</head>
<body>
    
    <a href="https://www.google.com/" target="_blank">ABCD</a>
    <br>
    <a href="1.html">Page 1</a>
    <br>

    <ul>
        <li><a href="#ch1">Chapter 1</a></li>
        <li><a href="#ch2">Chapter 2</a></li>
        <li><a href="#ch3">Chapter 3</a></li>
    </ul>


    <h1 align="center" id="ch1">Chapter 1</h1>

    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore harum error ad hic, nesciunt non quaerat ipsam adipisci pariatur atque libero ea illum cum. Deleniti quis accusamus asperiores hic mollitia!
    Soluta, aspernatur deserunt nobis eum minima, impedit voluptate esse cumque voluptatibus exercitationem modi id at ad quibusdam necessitatibus ducimus reiciendis dolore vitae praesentium velit iusto voluptas. Error, omnis eaque. Quisquam.
    Error labore facere aliquid sequi voluptas id nostrum quae, est ducimus. Eum dignissimos blanditiis ipsa atque, temporibus ad suscipit quidem consequatur dolorum assumenda dolore dolor consectetur obcaecati dolores laborum dolorem?
    Eligendi distinctio ad maiores modi rem reiciendis recusandae sunt quo a iure, explicabo optio molestias aperiam reprehenderit totam quis non rerum cumque error. Consectetur, ea voluptatem voluptatibus id laborum quidem.
    Enim voluptas rem quibusdam magnam, officiis iusto velit ipsum ut, debitis repellat animi asperiores nostrum corporis tenetur illum inventore voluptates error? Nesciunt accusantium cum magni maiores hic optio alias cumque.
    Architecto quibusdam ratione cum repellendus odit in veritatis perspiciatis sunt quod earum voluptatibus distinctio, ipsum neque quasi vero inventore a fuga animi enim accusantium dolorem. Pariatur accusamus cum omnis officiis!
    Natus dolore reprehenderit sequi officiis dolorem eligendi ex atque quas fugiat numquam, sapiente distinctio exercitationem earum culpa animi debitis! Tempora, sit? Vero magni deleniti consectetur sapiente maiores ratione possimus nemo.
    Quisquam labore numquam assumenda nesciunt eveniet earum omnis. Molestias, quod soluta nostrum rem, culpa tempora pariatur tenetur a consequatur recusandae voluptate, nulla cupiditate! Deleniti pariatur laudantium molestias quibusdam voluptas et?
    Quidem ipsa temporibus aperiam molestiae iste explicabo, nesciunt necessitatibus totam id itaque culpa. Quia, fugiat illo animi vitae adipisci, a, enim ipsam ullam ea deleniti vel quisquam quasi corrupti sequi!
    Accusamus vero nemo vitae quibusdam amet esse doloremque in accusantium velit unde? Officiis deleniti voluptas sed incidunt, libero alias, accusamus dicta dolorum nisi, at accusantium dolore iusto minus. Quae, quos.
    Minima nesciunt quas at natus voluptatum animi distinctio, exercitationem, aspernatur nam, incidunt omnis. Numquam aperiam beatae quaerat omnis quisquam iure, laboriosam amet, voluptate nostrum pariatur provident placeat, quos culpa eum.
    Qui doloribus aut dolores eum iste, repellendus obcaecati ea unde quasi iure atque doloremque quaerat beatae quas, iusto aperiam excepturi rem aspernatur placeat molestias quos error quae quam. Possimus, error!
    Nesciunt labore explicabo earum praesentium dolorum repudiandae quas incidunt ex consequuntur pariatur nemo inventore soluta facere laborum ipsum id recusandae, adipisci porro mollitia libero fugit sint perferendis deleniti. Laborum, ratione?
    Expedita atque accusamus porro voluptas, amet ratione saepe nisi nemo. Dicta ullam aperiam voluptas animi cum libero architecto nam quas, eveniet, totam repellat consequuntur dolorem perspiciatis, quasi inventore quisquam hic?
    Ab laborum quisquam fugiat veniam, laboriosam eum aperiam. Debitis aliquid cum iure officiis corrupti. Iusto, soluta at facere harum consectetur non doloremque minima repudiandae eveniet blanditiis voluptates! Nam, esse deleniti.
    Libero, voluptatum nisi deserunt beatae possimus aspernatur vero officia a repudiandae cumque aperiam magni natus delectus velit dolorem accusantium culpa neque at fuga soluta voluptatem sit, ea facere adipisci! Quidem?
    Voluptatum, cum quod libero ipsum possimus laudantium, deleniti, exercitationem rem vel adipisci natus saepe. Quasi sapiente exercitationem asperiores quia in illum deserunt vel, sit, magnam totam minus perspiciatis, alias rem.
    Possimus et quibusdam vel, natus deleniti ipsam assumenda enim labore numquam quia provident minus perspiciatis earum veritatis cumque laudantium aliquid, dignissimos modi? Consequuntur inventore eveniet quibusdam voluptas quas facilis quia?
    Provident expedita, sequi quis, quasi consequatur tenetur magni voluptas deserunt unde ab veritatis commodi. Dignissimos molestias, aut modi, maxime consequatur quis, deleniti nobis exercitationem necessitatibus consequuntur praesentium error odio fugiat?
    Nihil eius cumque voluptatem quia vero voluptate, unde sed dolore eum repellat architecto harum eaque ea, fugiat soluta fuga modi voluptatum veniam similique nostrum. Quidem facilis minus laborum eveniet nihil?
    Reprehenderit assumenda voluptatem, voluptas, obcaecati tempora enim necessitatibus quos tempore voluptate dicta suscipit. Odio earum dicta voluptatibus harum fugit, reiciendis voluptatem fuga aut obcaecati quia laborum unde eligendi tempora neque.
    Error obcaecati modi nobis voluptate harum accusantium dicta quaerat ipsam dignissimos fugit! Iure nobis totam, necessitatibus explicabo incidunt optio minus mollitia ad, modi et saepe voluptate cupiditate quidem assumenda debitis.
    Quaerat nihil provident nemo quidem earum optio possimus eos eum voluptate delectus, reiciendis deserunt autem, labore fugiat? Quos pariatur facilis cumque deserunt hic culpa distinctio nemo quisquam, ea dignissimos fugiat?
    Placeat quos odit esse, laudantium harum tempora molestiae unde nisi deserunt nihil quidem in, labore, eveniet tempore non. Earum vitae quisquam officia magni esse totam nobis explicabo molestiae quam! Assumenda.
    Ut quos iusto voluptates laboriosam perspiciatis labore, dolor veniam impedit voluptas voluptate dicta! Quidem molestias libero accusantium totam nulla similique, alias vel, doloribus suscipit sed asperiores temporibus? Exercitationem, ratione odio?
    Assumenda impedit nihil voluptate possimus nemo repudiandae architecto. Cum exercitationem veniam tenetur labore quidem eos hic modi commodi, nemo unde eum repudiandae iusto aliquam ut tempore. Obcaecati saepe nam exercitationem.
    Nihil inventore nam perspiciatis natus, iste doloremque aut sequi, ut iure voluptates quod. Beatae, nulla doloribus? Ad molestias saepe eveniet optio est reprehenderit, laborum laudantium nobis consequatur expedita autem repudiandae?
    Hic ducimus odio explicabo, fugiat officiis minus non veritatis illo officia doloremque animi reprehenderit? Atque, maiores ducimus! Porro culpa, ea dolorem optio neque repellat soluta ipsa tempora a deserunt assumenda.
    Ipsam vitae labore deleniti deserunt perspiciatis nihil repellat mollitia, accusamus reiciendis nisi excepturi aperiam illo, odit nulla optio similique, consequatur facere hic impedit qui quo omnis dolores? Exercitationem, iusto ab?
    Ex dolorum aspernatur numquam vitae consequuntur? Voluptatibus tempore repudiandae natus iusto quae accusamus. Temporibus dicta ipsam debitis voluptatibus, doloribus enim! Aperiam blanditiis dolor, tempora ea recusandae ad odio dolores sed?</p>

    <h1 align="center" id="ch2">Chapter 2</h1>
    
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores ipsa, velit cumque voluptatum cupiditate enim quis, veritatis sit, repellendus corporis laboriosam? Voluptate, eaque error neque corporis vero eum officia velit.
    Suscipit culpa quod itaque, vitae, fugiat excepturi sit, facere ipsa ex consectetur nulla amet fugit sint. Fugit dolor nostrum, voluptas animi praesentium aliquam, earum fuga accusantium unde, iste quam nisi!
    Illum non eum porro pariatur! Quod impedit praesentium et veniam. Error delectus eligendi reprehenderit, molestias earum quo, voluptatem placeat ullam, molestiae culpa vero. Ipsum voluptas ea facere esse vel. Quisquam!
    Blanditiis nostrum libero animi, suscipit voluptates minus quod iusto ipsam eligendi quibusdam esse. Iste, reprehenderit. Veritatis doloremque ullam quam cumque id pariatur soluta velit, iure rerum rem, deleniti magnam itaque.
    Beatae assumenda impedit vero voluptatibus totam fugiat incidunt accusantium quasi adipisci repellat necessitatibus illum, ut nihil ducimus nisi, saepe veritatis voluptatem dolorum ex. Nihil necessitatibus nobis, unde ipsa debitis aliquam?
    Sequi, facilis architecto error aspernatur officia ab quod accusantium delectus voluptates vero consectetur pariatur adipisci libero veritatis repudiandae corrupti? Delectus aliquid distinctio veritatis harum pariatur voluptas, veniam doloremque aperiam minima.
    Deleniti quae ex sed magnam! Voluptatem, omnis nam voluptatibus eligendi necessitatibus perspiciatis expedita in fugit sit cupiditate, accusantium, facere aperiam suscipit illo modi obcaecati ipsum ipsa aspernatur iste dignissimos et.
    Dolorem quod nisi explicabo praesentium quas, maxime velit, earum obcaecati expedita mollitia sit fuga harum, sed assumenda vel quam non neque magnam quasi laboriosam quae saepe eligendi nam itaque? Mollitia.
    Nisi ducimus quibusdam eius quia quo eos neque. Cupiditate, perspiciatis fugit vero laboriosam voluptatem eum quaerat, perferendis dolores rem, voluptas a eligendi placeat nulla. Quasi porro nisi dolores alias fugiat?
    Iure veniam commodi accusantium fugiat esse quia optio, corrupti vel voluptatibus iste, delectus quos inventore et, animi harum dolorum numquam! Voluptatem, rem ut? Porro nobis ipsum ipsam dolores neque doloremque.
    Error, obcaecati? Nisi molestiae eveniet odio deleniti dignissimos debitis, amet quibusdam. Commodi, cumque eius recusandae neque eos a nostrum assumenda esse iste, ut quod quos odio. Perspiciatis recusandae aperiam rerum.
    Eos accusantium dolore natus id cupiditate culpa consequuntur amet quidem, similique inventore corporis earum ab maiores assumenda, placeat debitis beatae, quis pariatur itaque explicabo! Harum atque consectetur minima qui alias?
    Nihil, reiciendis eius! Repellendus libero optio magni, modi error eum laboriosam vero maiores. Illum nulla in beatae voluptatem cum ullam delectus suscipit, earum eos, velit, deleniti sequi culpa omnis veritatis!
    Excepturi dolorum voluptates deserunt iusto aliquam facere repellendus ducimus natus vitae iste! A aspernatur quam eligendi dolore praesentium. Reprehenderit harum maiores officiis, adipisci vel ea asperiores expedita iure eveniet tempora?
    Voluptatum, libero odio. Nisi, voluptates excepturi tempore illo aliquid facilis corrupti porro asperiores beatae, ad laborum quae consequuntur accusamus modi sapiente? Vel illo optio, animi non in distinctio iusto a.
    Velit error, minus veritatis maiores a distinctio voluptate maxime, itaque officia, dignissimos laborum. Odit doloremque sapiente, molestiae vitae, suscipit officia nam fuga obcaecati autem reiciendis nihil error porro, recusandae consequuntur.
    Laboriosam mollitia neque eligendi natus, vero suscipit, cupiditate accusantium architecto corporis, sed quos. Itaque reiciendis tenetur nostrum neque quod sapiente ipsam, alias corporis consequuntur magni repudiandae. Magni ad dolore at!
    Aliquid neque dignissimos velit, qui quas fuga debitis laudantium suscipit, odit quae aspernatur in quisquam modi porro asperiores a. Soluta accusantium dolore qui ullam harum temporibus sit nisi culpa saepe?
    Odio architecto enim, mollitia facere quaerat inventore ducimus omnis optio exercitationem qui alias eum animi deleniti et laborum obcaecati? Nam vel autem ratione molestias quae excepturi minima earum! Porro, nesciunt.
    Dicta fuga aliquam delectus veniam nihil! Incidunt reiciendis nesciunt deleniti, adipisci dicta, corrupti possimus veniam in accusantium beatae debitis aperiam! Obcaecati animi maxime inventore suscipit vero enim nostrum facilis veniam?
    Exercitationem veritatis eveniet nulla, quia neque corporis voluptatum obcaecati id commodi asperiores distinctio sint ea doloremque sapiente reiciendis quasi! Voluptatem, magni assumenda impedit repudiandae nesciunt neque iusto rem ipsa repellat!
    Maiores recusandae molestias necessitatibus, sapiente deserunt blanditiis nulla placeat sit quia quibusdam sed corrupti consequuntur est distinctio nostrum alias odio, asperiores in optio veniam. Ut itaque iure dignissimos accusamus tempora!
    Excepturi corrupti quasi autem eum est voluptatem vitae temporibus, incidunt consequatur quidem dicta. Natus repellendus numquam velit beatae. Deleniti aliquam repudiandae quo commodi officiis quidem praesentium assumenda omnis explicabo blanditiis?
    Enim ipsa praesentium nisi error dolores consequatur ipsam distinctio tempora earum voluptatum quis adipisci obcaecati dolorem doloribus minima nulla hic ducimus aliquam dignissimos nobis, sapiente quo eveniet. Voluptas, id laborum!
    Soluta voluptatibus quo nemo totam commodi asperiores dolorem sit voluptatem deleniti, aspernatur maiores enim ea delectus, similique ex quae magnam sequi provident quam aperiam itaque assumenda, voluptatum fugiat. Delectus, non.
    Excepturi autem cum sequi. Blanditiis velit ipsum, non unde omnis, minima distinctio exercitationem commodi magni, deleniti maiores dolorum. Aliquam, explicabo quos atque praesentium inventore earum magnam delectus nisi animi reprehenderit?
    Saepe architecto dolores modi ducimus! Quibusdam exercitationem rerum sunt eligendi ab ex debitis expedita sint recusandae amet eius quam omnis excepturi molestiae nisi, consequatur repellendus cum beatae, a quisquam. Ducimus.
    Nisi voluptas earum quod neque est! Voluptate, repellat, magni placeat doloribus doloremque consequatur ad corporis dolorem est officiis nostrum eos fuga voluptatem, eligendi facilis consectetur eaque. Repellendus tempore veniam animi.
    Exercitationem repellendus laboriosam laudantium autem et. At eum hic assumenda eveniet vero eius a, obcaecati consequatur doloremque debitis, unde praesentium dolores non eaque iste odit aperiam aspernatur quibusdam delectus. Quis!
    Esse blanditiis nulla atque fugit odio eveniet. Asperiores sint fugit corporis atque temporibus repudiandae nam consectetur quod, placeat libero minima maxime earum neque fuga doloremque? Neque quia quibusdam porro voluptas.</p>
    
    <h1 align="center" id="ch3">Chapter 3</h1>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eius aperiam nam laborum illo exercitationem culpa voluptatum? Adipisci expedita quia tenetur labore, voluptates pariatur eaque repudiandae, natus saepe, praesentium deserunt.
    Suscipit recusandae aliquid fugiat dolores earum officia nesciunt velit, sunt similique assumenda maiores cupiditate eaque corporis beatae ea consequuntur quas doloribus voluptates ut, optio dolorum temporibus? Quisquam quia illo placeat.
    Voluptate debitis nam assumenda officia repellat earum nesciunt, temporibus minus sint voluptas esse harum quasi labore! Iusto officiis vitae, vero obcaecati ex accusantium, corporis unde delectus magni aliquid adipisci inventore!
    Excepturi sint id similique recusandae a nostrum itaque ut maiores eligendi dolorem. Unde itaque obcaecati ad sint laudantium! Eos similique voluptatum quibusdam rem tempora iste recusandae maxime minima beatae corporis!
    Repellendus ex tenetur harum ipsum, labore voluptatibus vel. Nemo, hic et doloremque, quis, dolorum distinctio quae odio harum dolores cum fuga quo? Incidunt, temporibus? Id accusamus iste quae consequuntur dicta.
    Consequatur, incidunt, aut dignissimos corporis nulla rem explicabo ab voluptatibus velit tempore quas facilis dolore dolorum officia tempora quia dolor cum. Fuga alias ex velit illo, sapiente nihil! Similique, voluptates!
    Omnis illo iusto amet. Nihil porro odio alias quasi ipsa, iusto sapiente saepe hic voluptatibus recusandae voluptate sint, quisquam odit velit neque consequuntur adipisci officia enim delectus nisi beatae fugiat?
    Eum voluptas similique minima optio, dolore obcaecati, quasi odit beatae cumque iusto nemo consectetur commodi. Ullam iusto dolor molestiae animi, enim inventore molestias consequuntur dolore deserunt, natus odio perspiciatis. Voluptate!
    Ullam quos ad deleniti consectetur pariatur accusamus quam sequi, dignissimos beatae. Ex suscipit at culpa, est distinctio magni. Unde magni aspernatur aliquid minus omnis dolorem earum provident repudiandae! Eveniet, deserunt.
    Officia eum iure ipsam asperiores. Illo, nostrum deleniti eaque ad delectus aspernatur deserunt beatae aut ab est dolor culpa adipisci eos voluptates mollitia cumque aliquam! Temporibus obcaecati libero eum quasi.
    Iste quam, labore sapiente enim dicta odio animi reprehenderit nemo accusamus corrupti quas ut tempore soluta quisquam, neque, ab voluptatibus fugiat. Dolorem illum eum sed reiciendis voluptatem veritatis, cum fugit.
    Molestiae sequi architecto voluptate eos, laboriosam, facere aliquid explicabo molestias delectus ut, deleniti culpa repellat modi minus placeat tenetur amet incidunt voluptatem! Dignissimos libero est repellendus perspiciatis quidem minima commodi?
    Numquam, minus quibusdam asperiores totam provident quaerat earum pariatur veritatis commodi similique voluptas minima quis adipisci, nobis facilis! Itaque, dolorem dicta praesentium ex eius mollitia molestiae distinctio aperiam esse debitis!
    Dolore, quasi est provident architecto sint optio fugit, minus totam doloribus repellat, eius illum veniam! Id, reprehenderit dolore libero tempora nemo sunt voluptatibus mollitia quaerat ipsa. Tempore temporibus dolor deserunt!
    Illo similique fugiat perferendis quam labore repellendus dicta, nam porro quod ab ipsa harum repudiandae quis voluptates debitis totam deleniti dolorum modi. Odit numquam consequatur, in totam placeat maxime quibusdam.
    Sint velit quibusdam in eos itaque ad ex animi obcaecati sit deleniti error corporis ipsa, alias iusto labore totam nesciunt reiciendis cum? Ut similique eos vero? Recusandae deleniti quos veniam.
    Blanditiis ea facere qui quo non impedit quas maxime laudantium laborum voluptatem. Animi aspernatur modi sint vel consequuntur sapiente cumque quas deserunt laboriosam at! Incidunt molestiae adipisci ex ea rerum.
    Possimus deleniti neque quis, ea minus sapiente exercitationem corrupti ab fugit quo quisquam alias, accusantium impedit libero soluta, cumque eaque omnis error enim! Reprehenderit, repellat laudantium impedit natus sint quasi?
    Fuga quaerat aut eius aspernatur commodi, voluptas, cum nisi, odio modi labore facilis ad numquam corporis nostrum ipsum. Unde dicta vitae, fugiat ex eaque velit explicabo laborum ducimus neque in.
    Asperiores, enim? Distinctio consequatur repudiandae nihil nam laborum error, esse minima. Nesciunt voluptatem mollitia doloribus reprehenderit assumenda similique non veritatis laboriosam, voluptates architecto, consequuntur quam, modi totam officiis aliquid ducimus.
    Sint doloribus delectus soluta optio. Laborum necessitatibus exercitationem, dolores eveniet quia quas veritatis aliquam deleniti rem asperiores enim iure nam nulla est, vitae maxime? Sunt nesciunt asperiores rerum fugit quam.
    Debitis quae temporibus quis quo sunt praesentium quam ad facilis illo odio! Dolor amet ex rem nisi ut excepturi maxime eius dolores, enim, perspiciatis ipsa cumque? Magnam eius architecto animi!
    Perspiciatis hic quo nostrum sed fugiat ipsa, reiciendis, et quaerat a illum ad? Numquam veniam minus temporibus quae quia animi, dolores fuga reprehenderit explicabo nihil, reiciendis neque repudiandae vitae ab.
    Repudiandae nam saepe iste quos soluta tempore obcaecati, quo veritatis sit quae asperiores quia possimus numquam deserunt ullam maxime? Perferendis animi voluptatibus ut? Nobis, recusandae aut. Nihil sunt esse fugiat?
    Vitae culpa commodi veritatis odio corporis fugiat ratione, dolores eligendi necessitatibus aspernatur numquam architecto officiis. Porro expedita cupiditate ea, fugit sed reiciendis laudantium. Soluta commodi aut excepturi, fuga iure nobis!
    Itaque, cupiditate officiis aut, ipsa optio unde et architecto amet libero doloremque temporibus, consequuntur vel! Earum delectus necessitatibus aperiam inventore accusamus ab laborum praesentium eius. Dicta odio nulla quam nihil.
    Numquam, dignissimos assumenda. Nostrum quae corporis molestias facilis. Dolorem necessitatibus iusto natus maiores eos vero officiis fugit unde a nesciunt, porro ullam. Perferendis a aliquam necessitatibus nesciunt velit magnam id!
    Facilis iure beatae voluptatem nam tempore. Quis vel dicta sequi rerum tempore alias, impedit itaque, excepturi quo placeat, error suscipit repellat! Perspiciatis, excepturi sed officia eius quia nihil illo labore!
    Necessitatibus commodi soluta perspiciatis aut atque? Consequuntur aspernatur placeat, voluptates eaque autem harum doloribus soluta, eius nihil laudantium unde reiciendis consequatur vero esse deleniti quisquam, quam dolorem optio vitae molestias.
    Saepe ratione placeat fuga consequatur dolores quia laboriosam dolore quam modi vel aliquid harum eius deserunt sit mollitia, ipsa voluptates vitae architecto, repellendus voluptate. Distinctio quasi itaque eligendi labore natus.</p>

    <p align="center">
        Pages : <a href="#home">Home</a>,
        <a href="1.html">1</a>,
        <a href="2.html">2</a>,
        <a href="3.html">3</a>
    </p>


</body>
</html>