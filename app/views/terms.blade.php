
@extends('layouts.aaryaTech')
@section('meta')
	@if(count($meta) > 0)
		@foreach ($meta as $m)
    		<meta name="{{$m['name']}}" content="{{$m['content']}}" /> 
  		@endforeach
    @endif
 @stop 
 @section('main')
  <!--  Contact form -->
  <section id="abput-us" class="inner-page">
    <!--<section class="innerHeader clearfix relative">
      <div class="overlay"></div>
      <section class="container text-center relative">
        <h1 class="upCase">About Us</h1>
        <span>A</span> </section>
    </section>--><!-- // Inner page  -->

    <section class="container">
      

      <section class="row">
        <section class="col-md-12">
         <h2>Terms of Use </h2>
          <section class="titlebtm">
            <div></div>
          </section>
          <p><br />
            Thanks for your interest in our Website at www.aaryatechnovation.com. Your use of this Website, including the content, resources, blog, materials and information available on our Website is governed by these Terms of Use. By using this Website, you acknowledge that you have read and agree to these Terms. <br />
            <strong>About Us</strong><br />
            This Website is maintained and operated by Aarya Technovation India Pvt. Ltd. <br />
            <strong>Resources and Materials</strong><br />
            Except for certain resources and materials provided through a password protected area on this Website, a login section (see below), ALL MATERIALS ARE PROVIDED &quot;AS IS,&quot; MAY NOT BE RELIED UPON FOR ANY PURPOSE, AND ARE NOT SUBJECT TO EXPRESS OR IMPLIED WARRANTIES OF ANY KIND. In particular, except to the extent that Materials and resources provided through a password protected area on this Website are subject to different rules, we make no representations or warranties with regard to the Materials' and resources accuracy, completeness, non-infringement or fitness for a particular purpose. You should be aware that a significant portion of the Materials and resources include or consist of information that has been provided by third parties and has not been validated or verified by us. In connection with our activities, we often become subject to a variety of confidentiality obligations. Any statements we make may be affected by those confidentiality obligations, with the result that we may be prohibited from making full disclosures. Without limitation on the effect of other warnings and disclaimers set forth in these Terms, you should interpret any statements we make (on this Website or otherwise) in that context. Please ensure that your own computer security is comprehensive and up to date. We accept no responsibility for viruses, malware or other malicious or damaging software contained in the Materials or otherwise. <br />
            <strong>Third-Party Sites </strong><br />
            We accept no responsibility for third-party sites available through this Website, via hyperlink or otherwise. You are encouraged to review the terms of use applicable to those sites. Any access to, or use of, a third-party site is solely at your own risk.<br />
            <strong>Login section and other Password Protected Areas </strong><br />
            Certain Materials may be made available through a password protected area on this Website. Each password is intended to be confidential and used only by the individual or entity to whom it is issued. Do not disclose your password to any unauthorized person. If you access Materials through a password protected area, please note that the written agreements between you and the applicable Aarya Technovation entity as well as any provisions set forth in those Materials, govern the parties' respective rights and obligations with regard to those Materials. In particular, Materials provided through a password protected area generally are confidential and subject to limitations on disclosure and use, and Aarya Technovation individuals and entities generally have limited liability with respect to the accuracy and completeness of such Materials and resources. <br />
            <strong>No Offer, Solicitation or Advice</strong><br />
            Except to the extent expressly set forth in Materials and resources provided through a password protected area on this Website, or as otherwise specified by a Aarya Technovation entity in writing, nothing on this Website is intended to constitute an offer, or solicitation of an offer or other asset or service, investment advice or an offer to provide such advice, or a basis for making any investment or project related decision. Except as expressly stated by a Aarya Technovation entity in writing, neither this Website nor any of the Materials and resources make any effort to present a comprehensive activities of Aarya Technovation. <br />
            <strong>Restrictions on Use </strong><br />
            We reserve all rights with respect to the design and content of this Website. In particular, you must not misappropriate the design or content of this Website and you must not alter or deface such design or the content in any way. Nothing on this Website grants any license with respect to such design or content, except that you may download and use Materials, resources and blog solely for your own personal information only. <br />
            <strong>Ownership of Trademarks, Etc. </strong><br />
            All trademarks, service marks, trade names, logos, graphics, articles and other Materials and resources on this Website are protected by applicable copyright, trademark and other applicable laws. In particular, all trademarks, service marks, trade names and logos displayed on this Website are proprietary to Aarya Technovation and its affiliates or their respective third-party owners and this Website grants no license thereto. <br />
            <strong>Pitching an idea or Other Confidential Information </strong><br />
            Due to the large number of business ideas and related materials and resources that we review, and the similarity of many such plans and materials, we cannot accept responsibility for protecting against misuse or disclosure any confidential or proprietary information or other materials in the absence of our express written agreement to do so. Please consider this carefully before sending us any information or other materials that you deem confidential or proprietary. <br />
            <strong>Limitation of Liability </strong><br />
            Except as specifically agreed by a Aarya Technovation entity in writing, NO Aarya Technovation INDIVIDUAL OR ENTITY SHALL HAVE ANY LIABILITY BASED UPON YOUR USE OF, OR RELIANCE UPON, THIS WEBSITE OR THE MATERIALS. Some jurisdictions limit our ability to disclaim liability. With regard to those jurisdictions, our liability shall be limited to the greatest extent permitted by applicable law.<br />
            <strong>Modification of these Terms </strong><br />
            We reserve the right to modify these Terms at any time. Please check these Terms periodically for changes. Your continued use of this Website after the posting of changes constitutes your binding acceptance of such changes. <br />
            <strong>Miscellaneous </strong><br />
            This Website is operated and controlled by Aarya Technovation India Pvt. Ltd. If it is illegal or prohibited in your country of origin to access or use this Website, then you should not do so. Those who choose to access our website access it on their own initiative and are responsible for compliance with all local laws and regulations. These Terms, and any disputes relating to these Terms or your use of our Website or the Materials, shall be governed in all respects by the applicable laws without regard to conflicts of laws principles. Except as otherwise agreed in writing Terms of Use. Except as otherwise agreed in writing by the applicable Aarya Technovation entities, any disputes relating to these Terms shall be resolved exclusively in the courts located in Hyderabad, Telangana. These Terms set forth the entire agreement between you and us with respect to the subject matter hereof and supersede all prior agreements relating to such subject matter. All Aarya Technovation individuals and entities are intended third-party beneficiaries of these Terms. Our rights under these Terms may be waived by us only in writing. These Terms are binding on you as well as your successors and permitted assigns. In the event any provision of these Terms is determined to be invalid or unenforceable, such provision shall be deemed severed from the remainder of these Terms and replaced with a valid and enforceable provision as similar in intent as reasonably possible to the provision so severed, and shall not cause the invalidity or unenforceability of the remainder of these Terms. <br />
            <strong>Contact Information</strong><br />
            Any questions, concerns or complaints regarding these Terms should be sent to contact@aaryatechnovation.com <br />
            Effective Date: November 14, 2014 <br />
          <strong>©2014 Aarya Technovation India Pvt. Ltd. All Rights Reserved.</strong></p>
        </section>
      </section>
     
    </section>

  </section> 




@stop