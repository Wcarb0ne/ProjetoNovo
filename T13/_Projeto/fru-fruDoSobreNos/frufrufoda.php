


<style>

.card {
  position: relative;
  width: 250px;
  height: 250px;
  color: #2e2d31;
  background: #131313;
  overflow: hidden;
  border-radius: 20px;
  margin-left: 40px;
  margin-right: 40px;
}

.temporary_text {
  font-weight: bold;
  font-size: 24px;
  padding: 6px 12px;
  color: #f8f8f8;
}

.card_title {
  font-weight: bold;
}

.card_content {
  position: absolute;
  left: 0;
  bottom: 0;
    /* edit the width to fit card */
  width: 100%;
  padding: 20px;
  background: #f2f2f2;
  border-top-left-radius: 20px;
    /* edit here to change the height of the content box */
  transform: translateY(150px);
  transition: transform .25s;
}

.card_content::before {
  content: '';
  position: absolute;
  top: -47px;
  right: -45px;
  width: 100px;
  height: 100px;
  transform: rotate(-175deg);
  border-radius: 50%;
  box-shadow: inset 48px 48px #f2f2f2;
}

.card_title {
  color: #131313;
  line-height: 15px;
}

.card_subtitle {
  display: block;
  font-size: 12px;
  margin-bottom: 10px;
}

.card_description {
  font-size: 14px;
  opacity: 0;
  transition: opacity .5s;
}

.card:hover .card_content {
  transform: translateY(0);
}

.card:hover .card_description {
  opacity: 1;
  transition-delay: .25s;
}

</style>
<div class="container"></div>
<div class="card-group">
 <article class="card">
  <div class="temporary_text">
      Place image here
  </div>
 <div class="card_content">
  <span class="card_title">This is a Title</span>
      <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
      <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
  
 </div>
 </article>

 <article class="card">
  <div class="temporary_text">
      Place image here
  </div>
 <div class="card_content">
  <span class="card_title">This is a Title</span>
      <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
      <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
  
 </div>
 </article>

 <article class="card">
  <div class="temporary_text">
      Place image here
  </div>
 <div class="card_content">
  <span class="card_title">This is a Title</span>
      <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
      <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
  
 </div>
 </article>
  
 <article class="card">
  <div class="temporary_text">
      Place image here
  </div>
 <div class="card_content">
  <span class="card_title">This is a Title</span>
      <span class="card_subtitle">Thsi is a subtitle of this page. Let us see how it looks on the Web.</span>
      <p class="card_description">Lorem ipsum dolor, sit amet  expedita exercitationem recusandae aut dolor tempora aperiam itaque possimus at, cupiditate earum, quae repudiandae aspernatur? Labore minus soluta consequatur placeat.</p>
  
 </div>
 </article>

</div>