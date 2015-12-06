//
//  ViewController.swift
//  The Guessing Game
//
//  Created by Mark Suarin on 8/10/15.
//  Copyright © 2015 MarkSuarin. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var guessField: UITextField!
    
    @IBOutlet var resultsLabel: UILabel!
    
    @IBAction func guessBtn(sender: AnyObject) {
        let fingers = String(arc4random_uniform(6))
        
        if (guessField.text == "")
        {
            resultsLabel.text = "Please enter a number"
        }
        else if(fingers == guessField.text)
        {
            resultsLabel.text = "That is correct!"
            
        }
        else
        {
            resultsLabel.text = "That is incorrect. I am holding " + fingers + " fingers"
        }
    }
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

