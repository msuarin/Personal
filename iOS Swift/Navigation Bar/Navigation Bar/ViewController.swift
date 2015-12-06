//
//  ViewController.swift
//  Navigation Bar
//
//  Created by Mark Suarin on 8/12/15.
//  Copyright © 2015 MarkSuarin. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet var timerDisplay: UILabel!

    var time = 0
    var timer = NSTimer()
    
    func result()
    {
        time++
        timerDisplay.text = "\(time)"
    }
    
    @IBAction func playButton(sender: AnyObject) {
        
        
        
        timer = NSTimer.scheduledTimerWithTimeInterval(1, target: self, selector: Selector("result"), userInfo: nil, repeats: true)
        
    }
    
    
    @IBAction func pauseButton(sender: AnyObject) {
        timer.invalidate()
        
    }
    
    @IBAction func ressetButton(sender: AnyObject) {
        timer.invalidate()
        time = 0
        timerDisplay.text = "0"
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

