Feature: Set account details
  As a user 
  I want to set my account details

  Background:
    Given User "l3l0" is in database
    And I am on /user/profile/l3l0

  Scenario: Fill required fields
    Given I fill in "userProfile[firstname]" with "Leszek"
    And I fill in "userProfile[lastname]" with "Prabucki"
    And I fill in "userProfile[email]" with "leszek.prabucki@gmail.com"
    And I fill in "userProfile[age]" with "24"
    And I fill in "userProfile[job]" with "PHP developer"
    When I press "Save" in userProfile form
    Then I should see "Your details is saved."
    And User "Leszek" "Prabucki" with "leszek.prabucki@gmail.com" email was created
 
  Scenario: Does not fill required fields
    Given I fill in "userProfile[firstname]" with "Leszek"
    When I press "Save" in userProfile form
    Then I should see "You should fill all required fields."
