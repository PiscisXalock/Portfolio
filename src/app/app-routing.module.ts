import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AboutExtendsComponent } from './components/about-extends/about-extends.component';
import { AboutComponent } from './components/about/about.component';
import { AcknowledgmentsComponent } from './components/acknowledgments/acknowledgments.component';
import { GamesExtendsComponent } from './components/games-extends/games-extends.component';
import { HomeComponent } from './components/home/home.component';
import { SalutationComponent } from './components/salutation/salutation.component';

const routes: Routes = [
  {path: '', component:HomeComponent},
  {path: 'acknowledgments', component:AcknowledgmentsComponent},
  {path: 'gamesExtends', component:GamesExtendsComponent},
  {path: '**', component:HomeComponent},
];

@NgModule({
  imports: [RouterModule.forRoot(routes), RouterModule],
  exports: [RouterModule]
})
export class AppRoutingModule { }
