import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AboutExtendsComponent } from './about-extends.component';

describe('AboutExtendsComponent', () => {
  let component: AboutExtendsComponent;
  let fixture: ComponentFixture<AboutExtendsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ AboutExtendsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(AboutExtendsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
