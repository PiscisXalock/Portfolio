import { ComponentFixture, TestBed } from '@angular/core/testing';

import { WorksExtendsComponent } from './works-extends.component';

describe('WorksExtendsComponent', () => {
  let component: WorksExtendsComponent;
  let fixture: ComponentFixture<WorksExtendsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ WorksExtendsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(WorksExtendsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
