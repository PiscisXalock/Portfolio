import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { AboutComponent } from './components/about/about.component';
import { SkillsComponent } from './components/skills/skills.component';
import { GamesComponent } from './components/games/games.component';
import { ContactComponent } from './components/contact/contact.component';
import { SalutationComponent } from './components/salutation/salutation.component';
import { UnderConstructionComponent } from './components/under-construction/under-construction.component';
import { HomeComponent } from './components/home/home.component';
import { WorksComponent } from './components/works/works.component';
import { WorksExtendsComponent } from './components/works-extends/works-extends.component';
import { AboutExtendsComponent } from './components/about-extends/about-extends.component';
import { SkillsExtendsComponent } from './components/skills-extends/skills-extends.component';
import { FootComponent } from './components/foot/foot.component';
import { AcknowledgmentsComponent } from './components/acknowledgments/acknowledgments.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    AboutComponent,
    SkillsComponent,
    GamesComponent,
    ContactComponent,
    SalutationComponent,
    UnderConstructionComponent,
    HomeComponent,
    WorksComponent,
    WorksExtendsComponent,
    AboutExtendsComponent,
    SkillsExtendsComponent,
    FootComponent,
    AcknowledgmentsComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})

export class AppModule { }
