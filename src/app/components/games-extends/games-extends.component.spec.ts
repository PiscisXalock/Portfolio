import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GamesExtendsComponent } from './games-extends.component';

describe('GamesExtendsComponent', () => {
  let component: GamesExtendsComponent;
  let fixture: ComponentFixture<GamesExtendsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ GamesExtendsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(GamesExtendsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
