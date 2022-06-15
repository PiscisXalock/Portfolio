import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Location } from '@angular/common';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {


  ngOnInit(): void {
  }

  isCollapse = true;
  toggleState() {
    let foo = this.isCollapse
    this.isCollapse = foo === false ? true : false;
  }

  title = 'refreshPage';
	constructor(public router: Router, public _location: Location) { }
	refresh(): void {
		this.router.navigate([''])
  .then(() => {
    window.location.reload();
  });
	}

}
