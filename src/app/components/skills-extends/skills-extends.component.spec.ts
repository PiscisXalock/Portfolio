import { ComponentFixture, TestBed } from '@angular/core/testing';

import { SkillsExtendsComponent } from './skills-extends.component';

describe('SkillsExtendsComponent', () => {
  let component: SkillsExtendsComponent;
  let fixture: ComponentFixture<SkillsExtendsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ SkillsExtendsComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(SkillsExtendsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
