import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  title = 'Portfolio';

  constructor(public router: Router) { }

  ngOnInit(): void {
    
  }

  changeOfRoutes(): void {
		this.router.navigate([''])
  .then(() => {
    window.location.reload();
  });
	}
}
